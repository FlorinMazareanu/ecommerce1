<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{

    public function index(){
    	$first = DB::table('products')->select('product_image','product_name','product_price')->first();
    	$featuredProducts = DB::table('products')->select('product_image','product_name','product_price')->where('product_featured', '=', 1)->take(4)->get();
    	$newProducts = DB::table('products')->select('product_image','product_name','product_price','product_timestamp')->take(10)->orderBy('product_timestamp','desc')->get();
    	$data = array('first' => $first, 'featuredProducts' => $featuredProducts, 'newProducts' => $newProducts);

    	return view('pages.index', ['data' => $data]);
    }

    public function product($prod){
    	$data = DB::table('products')->select('product_image','product_name','product_price','product_desc')->where('product_name', '=', $prod)->get();
    	return view('pages.product', ['data' => $data]);
    }

    public function category($categ){
    	$categData = DB::table('products')->select('product_image','product_name','product_price','product_desc')->where('product_category', '=', $categ)->get();
    	return view('pages.category', ['categData' => $categData]);
    }

    public function authentication(){
    	return view('pages.authentication');
    }

}
