<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksionline;
use Auth;
use App\User;

class TransaksionlinesController extends Controller
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
        $transaksionlines = $user->transaksionlines;
        return view('transaksionline.index',compact('transaksionlines'));
    }
    public function datato(){
        $transaksionlines = Transaksionline::all();
        return view('transaksionline.datato',compact('transaksionlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksionline.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->bukti);

        $request->validate([
            'bukti'=>'mimes:png,jpg,jpeg,gif,svg',
            'kartu'=>'required',
            'pengiriman'=>'required',
            'alamatpengiriman' => 'required',
            'totalbelanja' => 'required',
        ]);
        $imgName = $request->bukti->getClientOriginalName().'-'. time().'.'. $request->bukti->extension();

        $request->bukti->move(public_path('image'), $imgName);

        Transaksionline::create([
            'kartu'=> $request["kartu"],
            'alamatpengiriman'=> $request["alamatpengiriman"],
            'pengiriman'=> $request["pengiriman"],
            'bukti'=>$imgName,
            'totalbelanja'=> $request["totalbelanja"],
            'user_id'=> Auth::id(),
        ]);
        return redirect('/transaksionline')->with('status','data anda berhasil tersimpan di server dan akan segera di kirim');
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
