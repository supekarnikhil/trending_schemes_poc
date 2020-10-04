<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Trendings;

class Schemes extends Model
{
    public static function getSchemeList( $intLimit, $intOffset ) {
        return DB::select('SELECT
                                id, category_id, name
                            FROM
                                scheme
                            ORDER BY
                                category_id
                            LIMIT :limit OFFSET :offset',
                            [':limit' => $intLimit, ':offset' => $intOffset]);
    }

    public static function getCategoryList( $arrintCategoryIds ) {
        if( !valArr( $arrintCategoryIds ) ) {
            return [];
        }
        $strSelect = 'SELECT
                        id, name
                    FROM
                        category
                    WHERE
                        id IN (' . implode( ',', $arrintCategoryIds ) . ')';
        return DB::select( $strSelect );
    }

    public static function bookScheme( $intSchemeId, $intUserId ) {
        try {
            DB::select(
                DB::raw(
                    'CALL bookScheme(
                        '. ( int ) $intSchemeId . ', ' .  ( int )  $intUserId . '
                        )'
                    )
            );
            return true;
        } catch( Exception $e ) {
            print_r($e->getMessage());
            return false;
        }
    }
}
