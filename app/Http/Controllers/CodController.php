<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cod;
use Auth;
use App\Basket;
use App\Barang;
use App\User;

class CodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
    $this->middleware('auth')->only('index');
    }
    public function index()
    {
        $user = Auth::user();
        $cod = $user->cod;
        $barangs = $user->barangs;
        return view('cod.index',compact('cod','barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = Barang::all();
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
            'telpon'=>'required',
            'barangs_id'=>'required',
            'alamat'=>'required',
            'pengiriman'=>'required',
            'totalbelanja'=>'required'
        ]);
        $cod = Cod::create([
            'telpon'=> $request["telpon"],
            'barangs_id'=>$request["barangs_id"],
            'alamat'=> $request["alamat"],
            'pengiriman'=> $request["pengiriman"],
            'totalbelanja'=> $request["totalbelanja"],
            'user_id'=> Auth::id()
        ]);
        return redirect('cod')->with('status','pesanan anda segera di antar');
    }
    public function datacod()
    {
        // $user = Auth::user();
        // $cod = $user->cod;
        $cod = Cod::all();
        return view('cod.datacod',compact('cod'));
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
