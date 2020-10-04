<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTrendingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trending', function (Blueprint $table) {
            $table->integer('scheme_id');
            $table->integer('category_id');
            $table->integer('state_id');
            $table->integer('booking_count');
            $table->timestamps();
        });

        DB::unprepared('ALTER TABLE `trending` ADD PRIMARY KEY ( `scheme_id` , `category_id`, `state_id` )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trending');
    }
}
