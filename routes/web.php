<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Models\Product;
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

Route::get('/', function () {
     $newProducts=Product::where('new','=',1)->paginate(
        $page=3,
        $cl=['*'],
        $pagename='newproduct'
     );
     $saleProducts=Prodcut::whereColumn('promotion_price','<','unit_price')->where('promotion_price','>',0)->paginate(
        $page=3,
        $cl=['*'],
        $pagename ='saleProducts'
     );
    return view('home',[
        'newProducts' -> $newProducts,
        'saleProdcuts' -> $saleProducts
        
]);
});
Route::resource('products',ProductController::class);
route::get('/products/{id}',[ProductController::class, 'show']);
Route::resource('home',PageController::class);
// Route::get('/home', function () {
//     return view('home');
// });
