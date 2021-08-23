<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        // untuk arah akses sesuai role
        // $role = Auth::user()->role;
        // if ($role == 'admin') {
        //     return redirect('admin');
        // }elseif ($role == 'penjual') {
        //     return redirect('penjual');
        // }elseif ($role == 'pembeli') {
        //     return redirect('baskets');
        // }else {
        //     return redirect('logout');
        // }
    }
}
