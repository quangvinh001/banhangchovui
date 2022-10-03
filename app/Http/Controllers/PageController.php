<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;

class PageController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // Đổ slide ra trang chủ
        $slide=Slide::all();
       
        // return view('banhang.home',['slide'=>$slide]);Cách 2
    //Đổ dữ liệu sản phẩm ra trang  
    $new_products = Product::where('new','=',1)->paginate(8,['*'],'page1');
    $sale_products=Product::where('promotion_price','>',0)->paginate(8,['*'],'page2');
    

        

    return view('banhang.home',compact('slide','new_products','sale_products'));  
    }
}
