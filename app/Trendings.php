<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Trendings extends Model
{
    public static function getTrendingSchemeList( $intLimit, $intOffset ) {
        $strSelect = 'SELECT
                            s.id, s.name, t2.category_id
                    FROM
                        (SELECT DISTINCT category_id FROM trending) t,
                        LATERAL (SELECT
                                    *
                                FROM
                                    trending t2
                                WHERE
                                    t2.category_id = t.category_id
                                ORDER BY 
                                    t2.booking_count DESC,
                                    t2.updated_at DESC
                                LIMIT 3) t2
                        JOIN scheme s ON s.id = t2.scheme_id
                    ORDER BY
                        t2.category_id,
                        t2.booking_count DESC,
                        t2.updated_at DESC
                    LIMIT :limit
                    OFFSET :offset';
        return DB::select( $strSelect, [':limit' => $intLimit, ':offset' => $intOffset] );
    }
}
