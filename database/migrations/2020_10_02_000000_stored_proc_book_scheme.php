<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class StoredProcBookScheme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $strStoredProc =
            'CREATE PROCEDURE bookScheme (
                IN i_scheme_id INT,
                IN i_user_id INT
            )
            BEGIN
                DECLARE stateId INT;
                DECLARE categoryId INT;

                SELECT
                    state_id INTO stateId
                FROM
                    `user` u
                WHERE
                    u.id = i_user_id;

                SELECT
                    category_id INTO categoryId
                FROM
                    scheme s
                WHERE
                    s.id = i_scheme_id;
                   


                INSERT INTO `order`
                    (user_id, state_id, scheme_id, created_at, updated_at)
                VALUES
                    (i_user_id, stateId, i_scheme_id, UTC_TIMESTAMP(), UTC_TIMESTAMP());

                INSERT INTO
                    trending (scheme_id, category_id, state_id, booking_count, created_at, updated_at)
                VALUES
                    (i_scheme_id, categoryId, stateId, 1, UTC_TIMESTAMP(), UTC_TIMESTAMP())
                ON DUPLICATE KEY UPDATE
                    updated_at = UTC_TIMESTAMP(),
                    scheme_id = i_scheme_id,
                    category_id = categoryId,
                    state_id = stateId,
                    booking_count = ( SELECT
                                    count(1)
                                FROM
                                    `order`
                                WHERE
                                    state_id = stateId
                                    AND scheme_id = i_scheme_id
                                );
            END';

        DB::unprepared( $strStoredProc );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS bookScheme');
    }
}