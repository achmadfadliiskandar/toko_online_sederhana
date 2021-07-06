<?php

namespace App\Http\Controllers;
use App\Konfirmasi;
use App\User;
use Auth;
use App\Cod;
use App\Transaksionline;
use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $konfirmasi = Konfirmasi::all();
    return view('konfirmasi.index',compact("konfirmasi"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $cod = $user->cod;
        $transaksionlines = $user->transaksionlines;
        return view('konfirmasi.create',compact('cod','transaksionlines'));
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
            'pengantaran' => 'required',
        ]);
        //batas
        $konfirmasi = Konfirmasi::Create([
            'status'=> $request["status"],
            'pengantaran'=>$request["pengantaran"],
            'cod_id'=>$request["cod_id"],
            'transaksionlines_id'=>$request["transaksionlines_id"],
            'user_id'=> Auth::id()
        ]);
        return redirect('/');
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
