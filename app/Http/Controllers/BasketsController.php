<?php

namespace App\Http\Controllers;

use App\Basket;
use App\User;
use Auth;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BasketsController extends Controller
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
        // $basket = Auth::user()->baskets()->sum('totalharga');
        // $baskets = Basket::withTrashed()->get();
        // $user = Auth::user();
        // $baskets = $user->baskets;
        $baskets = Basket::all();
        return view('baskets.index',compact('baskets'));
    }
    public function admin()
    {
        // khusus admin
        $baskets = Basket::all();
        return view('baskets.admin',compact('baskets'));
    }

    public function penjual(){
        $user = Auth::user();
        $baskets = $user->baskets;
        return view('baskets.penjual',compact('baskets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('baskets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->gambar);
        $request->validate([
            'namabarang' => 'required',
            'hargabarang' => 'required',
            // 'jumlah_beli' => 'required|numeric',
            'stok' => 'required|numeric',
            'keterangan' => 'required',
            // 'gambar'=>'mimes:png,jpg,jpeg,svg',
            'gambar'=>'required',
            // 'totalharga' => 'required'
        ]);

        // $imgName = $request->gambar->getClientOriginalName(). '.'. time(). '.' . $request->gambar->extension();
        // $request->gambar->move(public_path('images'),$imgName);

        $basket = Basket::create([
    		'namabarang' => $request["namabarang"],
            'hargabarang' => $request["hargabarang"],
            // 'jumlah_beli' => $request["jumlah_beli"],
            'stok'=> $request["stok"],
            'keterangan'=> $request["keterangan"],
            // 'gambar' => $imgName,
            'gambar' => $request["gambar"],
            // 'totalharga' => $request["totalharga"],
            'user_id'=>Auth::id()
    	]);

    
        // Basket::create($request->all());
        return redirect('admin')->with('status','Data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Basket $basket)
    {
        return view('baskets.show',compact('basket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        return view('baskets.edit',compact('basket'));
	// $baskets = DB::table('baskets')->where('namabarang')->get();
	// return view('baskets.edit',compact('basket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basket $basket)
    {
        $request->validate([
            'namabarang' => 'required',
            'hargabarang' => 'required',
            'stok'=> 'required'
            // // 'jumlah_beli' => 'required|numeric',
            // 'totalharga' => 'required'
        ]);
        
        Basket::where('id', $basket->id)
        ->update([
            'namabarang' => $request->namabarang,
            'hargabarang' => $request->hargabarang,
            'stok' => $request->stok,
            // 'jumlah_beli' => $request->jumlah_beli,
            // 'totalharga' => $request->totalharga
        ]);
        // DB::table('baskets')->where('namabarang',$request->namabarang)->update([
        //     'namabarang' => $request->namabarang,
        //     'hargabarang' => $request->hargabarang,
        //     'jumlah_beli' => $request->jumlah_beli,
        //     'totalharga' => $request->totalharga
        // ]);
        return redirect('admin')->with('status','Keranjang berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket $basket)
    {
        Basket::destroy($basket->id);
        return redirect('admin')->with('status','data berhasil ke hapus');
    }

}
