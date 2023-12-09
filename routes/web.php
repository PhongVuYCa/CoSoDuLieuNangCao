<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LogoutController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Trang Home
Route::get('/', function ()
{return view('home');});
Route::get('/home', function ()
{return view('home');});

//Trang Blog
Route::get('/blog', function ()
{return view('blog');});

//Trang Shop
Route::get('/shop', 'App\Http\Controllers\ProductController@index');


//Trang Đăng Nhập
Route::get('/login', 'App\Http\Controllers\LoginController@create');
Route::post('/checkLogin', 'App\Http\Controllers\LoginController@checkLogin');

//Trang Đăng Xuất
Route::get('/logout', 'App\Http\Controllers\LogoutController@checklogout');

//Trang Đăng Kí 
Route::get('/register', function ()
{return view('register');});
Route::post('/register', 'App\Http\Controllers\RegisterController@register');

//Trang Admin
Route::get('/admin', 'App\Http\Controllers\ProductController@list');

//Trang Quản Lý User
Route::get('/listUser', 'App\Http\Controllers\CustomerController@index');

//Trang Xoá User
Route::post('/destroy/{code}', 'App\Http\Controllers\CustomerController@destroy');

//Trang Thêm User
Route::get('/createUser', 'App\Http\Controllers\CustomerController@create');
Route::post('/createUser', 'App\Http\Controllers\CustomerController@store');

//Trang Thông Tin Khách Hàng
Route::get('/profile/{code}', 'App\Http\Controllers\CustomerController@show');

//Trang Sửa Thông Tin Khách Hàng
Route::post('/profile/update/{code}', [CustomerController::class,'update']);
Route::get('/profile/edit/{code}', [CustomerController::class, 'edit']);

//Trang Sửa Sản Phẩm
Route::post('/admin/update/{code}', [ProductController::class,'update']);
Route::get('/admin/edit/{code}', [ProductController::class, 'edit']);

//Trang Xoá Sản Phẩm
Route::post('/delete/{code}', 'App\Http\Controllers\ProductController@delete');

//Trang Thêm Sản Phẩm
Route::get('/createProduct', 'App\Http\Controllers\ProductController@create');
Route::post('/createProduct', 'App\Http\Controllers\ProductController@store');

//Trang Tìm Kiếm Sản Phẩm
Route::get('/search', function (){
    return view('product.search');
});
Route::post('/search','App\Http\Controllers\SearchController@search');

//Trang Chi Tiết Sản Phẩm
Route::get('/shop/show/{code}', 'App\Http\Controllers\ProductController@show');

//Trang Thống Kê
// Route::get('/statistics', function (){
//     return view('admin.statistics');
// });
Route::get('/statistics', 'App\Http\Controllers\StatisticsController@index');

//Trang Giỏ Hàng
Route::get('/cart', 'App\Http\Controllers\CartController@index');

//Trang Thêm Sản Phẩm Vào Giỏ Hàng
Route::get('/cart', 'App\Http\Controllers\CartController@index');
Route::post('/AddCart', 'App\Http\Controllers\CartController@addcart');

//Trang Cập Nhật Số Lượng Sản Phẩm Trong Giỏ Hàng
Route::get('/edit/{id}', 'App\Http\Controllers\CartController@edit');
Route::post('/update/{id}', 'App\Http\Controllers\CartController@update');

//Trang Xoá Thêm Sản Phẩm Trong Giỏ Hàng
Route::get('/delete/{id}', 'App\Http\Controllers\CartController@delete');

//Trang mua hàng
Route::post('/checkout', 'App\Http\Controllers\CartController@checkout');


//Trang Danh Mục Sản Phẩm
Route::get('/shop/{cate}', 'App\Http\Controllers\ProductController@category');


