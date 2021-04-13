<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Barang;
use App\User;
use Auth;
class BarangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    // $this->middleware('auth')->only('show', 'delete');
    // }
    public function index()
    {
        // $barangs = Barang::all();
        $user = Auth::user();
        $barangs = $user->barangs;
        return view('barangs.index',compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = barang::create([
            'id_baskets' => $request["id_baskets"],
            'namabarang'=>$request['namabarang'],
            'hargabarang'=>$request['hargabarang'],
            'totalharga'=>$request['totalharga'],
            'stok'=>$request['stok'],
            'keteranganbrg'=>$request['keteranganbrg'],
            'user_id'=>Auth::id()
        ]);
        return redirect('/barangs')->with('status','barang berhasil di beli');
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
    public function edit(Barang $barang)
    {
        return view('barangs.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Barang $barang)
    {
        Barang::where('id', $barang->id)
        ->update([
            'namabarang' => $request->namabarang,
            'hargabarang' => $request->hargabarang,
            'stok' => $request->stok,
            'totalharga' => $request->totalharga
        ]);
        return redirect('/barangs')->with('status','Barang berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::destroy($id);
        return redirect('/barangs')->with('status','data berhasil ke hapus');
    }
    public function hapus($id)
    {
	DB::table('barangs')->where('id',$id)->delete();
	return redirect('/checkout')->with('status','berhasilguys');
    }
    public function checkout(){
        // $barangs = Barang::all();
        $user = Auth::user();
        $barangs = $user->barangs;
        return view('barangs.checkout',compact('barangs'));
    }
    public function trash(){
    $barangs = Barang::onlyTrashed()->get();
    return view('barangs.trash',compact('barangs'));
    }
}
