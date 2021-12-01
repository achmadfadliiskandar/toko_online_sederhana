<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cod;
use Auth;
use App\Basket;
use App\Barang;
use App\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class CodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
    $this->middleware('auth');
    }
    public function index()
    {
        $user = FacadesAuth::user();
        $cod = $user->cod;
        if ($barangs = $user->barangs) {
        // return redirect('barangs');
        error_reporting(0);
        }
        // else {
        //     error_reporting(0);
        // }
        return view('cod.index',compact('cod','barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = FacadesAuth::user();
        $barangs = $user->barangs;
        $baskets = Basket::all();
        return view('cod.create',compact('barangs','baskets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'telpon'=>'required',
            'barangs'=>'required',
            'alamat_pengiriman'=>'required',
            'stok'=>'required|numeric',
            // 'pengiriman'=>'required',
            'totalbelanja'=>'required'
        ]);
        $cod = new Cod;
        // $cod->telpon = $request->telpon;
        // $cod->alamat_pengiriman = $request->alamat_pengiriman;
        // $cod->stok = $request->stok;
        // $cod->barangs = $request->barangs;
        // $cod->baskets_id = $request->baskets_id;
        // // $cod->kode_unik = mt_rand(100,5000);
        // $cod->totalbelanja = $request->totalbelanja;
        // // $cod->pengiriman = $request->pengiriman;
        // // $cod->status = "Lunas";
        // $cod->user_id = FacadesAuth::user()->id;
        // $cod->save();

        // foreach ($cod as $value) {
        // $cod = new Cod;
        // $cod->telpon = $request->telpon;
        // $cod->alamat = $request->alamat;
        // $cod->barangs_id = $request->barangs_id;
        // $cod->baskets_id = $request->baskets_id;
        // $cod->kode_unik = mt_rand(100,5000);
        // $cod->totalbelanja = $request->totalbelanja;
        // $cod->pengiriman = $request->pengiriman;
        // $cod->status = "Lunas";
        // $cod->user_id = FacadesAuth::user()->id;
        // $cod->save();
        // }

        // foreach ($cod as $key => $value) {
        //     $cod = new Cod;
        //     $cod->telpon = $request->telpon;
        //     $cod->alamat = $request->alamat;
        //     $cod->barangs_id = $request->barangs_id;
        //     $cod->baskets_id = $request->baskets_id;
        //     // $cod->barangs_id = $request->barangs_id;
        //     // $cod->baskets_id = mt_rand(1,3);
        //     $cod->kode_unik = mt_rand(100,5000);
        //     $cod->totalbelanja = $request->totalbelanja;
        //     $cod->pengiriman = $request->pengiriman;
        //     $cod->status = "Lunas";
        //     $cod->user_id = FacadesAuth::user()->id;
        //     $cod->save();
        //     }
        for ($x = 1; $x <= 1; $x++) {
            $cod->alamat_pengiriman = $request->alamat_pengiriman;
            $cod->stok = $request->stok;
            $cod->barangs = $request->barangs;
            $cod->baskets_id = $request->baskets_id;
            // $cod->kode_unik = mt_rand(100,5000);
            $cod->totalbelanja = $request->totalbelanja;
            // $cod->pengiriman = $request->pengiriman;
            // $cod->status = "Lunas";
            $cod->user_id = FacadesAuth::user()->id;
            $cod->save();
            }
        return redirect('cod')->with('status','pesanan anda segera di antar');
    }
    public function datacod()
    {
        // $user = Auth::user();
        // $cod = $user->cod;
        $cod = Cod::all();
        $baskets = Basket::all();
        return view('cod.datacod',compact('cod','baskets'));
    }

    public function historycod()
    {
        // $user = Auth::user();
        // $cod = $user->cod;
        error_reporting(0);
        $user = FacadesAuth::user();
        $cod = $user->cod;
        $barangs = Barang::all();
        $baskets = Basket::all();
        return view('cod.history',compact('cod','barangs','baskets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //
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
