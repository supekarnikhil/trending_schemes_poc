<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Schemes;

class SchemeController extends Controller
{
    /**
     * Shows the list of all trending schemes
     *
     * @return View
     */
    public function list()
    {
        $arrmixSchemes      = Schemes::getSchemeList( 50, 0 );

        $arrintCategoryIds  = \rekeyArrayObject( 'category_id', $arrmixSchemes, false, 'category_id' );

        $arrmixCategories   = Schemes::getCategoryList( $arrintCategoryIds );

        $arrmixCategories   = \rekeyArrayObject( 'id', $arrmixCategories, false, 'name' );

        return view('all-schemes', ['AllSchemes' => $arrmixSchemes, 'AllCategories' => $arrmixCategories]);
    }

    public function book( $intSchemeId )
    {
        if( !valId( ( int ) $intSchemeId ) ) {
            return redirect()->back()->with('message', 'Invalid scheme id.');
        }

        $boolIsSuccess = Schemes::bookScheme( $intSchemeId, $intUserId = 1 );
        return redirect()->back()->with('message', 'Scheme # '.$intSchemeId.' booked successfully!');
    }
}