<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Trendings;
use App\Schemes;

class TrendingController extends Controller
{
    /**
     * Shows the list of all trending schemes
     *
     * @return View
     */
    public function list()
    {
        $arrmixTrendingSchemes  = Trendings::getTrendingSchemeList( 50, 0 );

        $arrintCategoryIds      = \rekeyArrayObject( 'category_id', $arrmixTrendingSchemes, false, 'category_id' );

        $arrmixCategories       = Schemes::getCategoryList( $arrintCategoryIds );

        $arrmixCategories       = \rekeyArrayObject( 'id', $arrmixCategories, false, 'name' );

        return view('trending-schemes', ['TrendingSchemes' => $arrmixTrendingSchemes, 'AllCategories' => $arrmixCategories]);
    }
}