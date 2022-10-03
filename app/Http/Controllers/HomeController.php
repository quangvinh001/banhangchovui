<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Silde;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $product = DB::table('products')->get();
        // return view('banhang.home', ['products' => $product]);
        // DB::table('products')->where('new','1')->get();
        // $product = DB::table('products')->select('*');
        // $product=$product->get();
        // return view('banhang.home',compact('product'));
        // $products=Product::all();
        // return view('banhang.home', ['products' => $products]);
        // $products = DB::table('products')->get();
        // return view('banhang.home', ['products' => $products]);
        // $slide=DB::table('slide')->select('image');
        // $slide=$slide->get();
        $slide=Slide::all();
        return view('banhang.home',compact('slide')); 
        // return view('banhang.home',['slide'=>$slide]);Cách 2
      
        

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
