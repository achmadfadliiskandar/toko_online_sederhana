<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basket;
class PagesController extends Controller
{
    public function home(){
        $baskets = Basket::paginate(3);
        error_reporting(0);
        return view('index',compact('baskets'));
    }
    public function about(){
        return view('about');
    }
}
