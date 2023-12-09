<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Search;

class SearchController extends Controller
{

    public function search(Request $request){

        $keywords= $request->get('search');
        $keywords = trim(strip_tags($keywords));
        $all_product = Product::all();
        $listsp=[];
        if ($keywords!=""){
            $listsp = Product::where("name", "like", "%$keywords%")->get();
        }
        return view('product.search')->with('search_product', $keywords )->with( 'listsp', $listsp);
    }
}
