<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $orderDetail = OrderDetail::all();
    //     return view('admin.statistics', compact('orderDetail'))->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    public function index()
    {
        $products = Product::raw(function($collection)
        {
            return $collection->aggregate([
                [
                    '$lookup' => [
                        'from' => 'orderDetail',
                        'localField' => '_id',
                        'foreignField' => 'product_id',
                        'as' => 'orderDetails'
                    ]
                ],
                [
                    '$project' => [
                        '_id' => 1,
                        'code' => 1,
                        'name' => 1,
                        'image' => 1,
                        'price' => 1,
                        'description' => 1,
                        'quantity' => 1,
                        'category_id' => 1,
                        'customer_id' => 1,
                        'total_quantity' => ['$sum' => '$orderDetails.quantity']
                    ]
                ]
            ]);
        });

        return view('admin.statistics', compact('products'));
    }





}
