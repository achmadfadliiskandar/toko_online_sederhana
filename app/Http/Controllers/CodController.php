<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cod;
use Auth;
use Illuminate\Support\Facades\File;
use App\Basket;
use App\Barang;
use App\CodDetails;
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
            'alamat_pengiriman'=>'required',
            'totalbelanja'=>'required'
        ]);
        $data = $request->all();
        // dd($data);
        $cod = new Cod;
        $cod->alamat_pengiriman = $data['alamat_pengiriman'];
        $cod->totalbelanja = $data['totalbelanja'];
        $cod->user_id = FacadesAuth::user()->id;
        $cod->save();

        // $detailcod = new CodDetails;
        // $detailcod->cod_id = $cod->id;
        // $detailcod->barangs_id = $data['barangs_id'];
        // $detailcod->baskets_id = $data['baskets_id'];
        // $detailcod->stok = $data['stok'];
        // $detailcod->hargabeli = $data['hargabeli'];
        // $detailcod->totalharga = $cod->totalbelanja;
        // $detailcod->user_id = FacadesAuth::user()->id;
        // $baskets = Basket::findorFail($request->baskets_id);
        // $baskets->stok -= $request->stok;
        // $baskets->save();
        // $detailcod->save();
        if (count($data['status']) > 0) {
            foreach ($data['status'] as $item => $value) {
                $data2 = array(
                    'cod_id' => $cod->id,
                    'status' => $data['status'][$item],
                    'barangs_id' => $data['barangs_id'][$item],
                    'baskets_id' => $data['baskets_id'][$item],
                    'stok' => $data['stok'][$item],
                    'hargabeli' => $data['hargabeli'][$item],
                    'totalharga' => $cod->totalbelanja,
                    'user_id' => FacadesAuth::user()->id
                );
                CodDetails::create($data2);
            }
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
