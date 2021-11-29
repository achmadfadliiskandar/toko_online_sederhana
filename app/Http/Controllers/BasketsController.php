<?php

namespace App\Http\Controllers;

use App\Basket;
use App\User;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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
        // khusus penjual
        $user = FacadesAuth::user();
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
            'gambar'=>'mimes:png,jpg,jpeg,svg',
            // 'gambar'=>'required',
            // 'totalharga' => 'required'
        ]);

        // $imgName = $request->gambar->getClientOriginalName(). '.'. time(). '.' . $request->gambar->extension();
        // $request->gambar->move(public_path('images'),$imgName);
        $basket = new Basket;
        if ($request->hasfile("gambar")) {
            $file = $request->file("gambar");
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('gambar',$filename);
            $basket->gambar = $filename;
        };

        $basket->namabarang = $request->namabarang;
        $basket->hargabarang = $request->hargabarang;
        $basket->stok = $request->stok;
        $basket->keterangan = $request->keterangan;
        $basket->user_id = FacadesAuth::user()->id;
        // $basket->user_id = $request->user_id;
        $basket->save();
          // Basket::create($request->all());
        return redirect('penjual')->with('status','Data berhasil di tambah');
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'namabarang' => 'required',
            'hargabarang' => 'required',
            'stok'=> 'required',
            'gambar'=>'required'
            // 'totalharga' => 'required'
        ]);
        $basket = Basket::find($id);
        if ($request->hasfile('gambar')) {
            $destination = 'gambar'. $basket->gambar;
            if (File::exists($destination)) {
            File::delete($destination);
            }
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('gambar', $filename);
            $basket->gambar = $filename;
        }

        $basket->namabarang = $request->namabarang;
        $basket->hargabarang = $request->hargabarang;
        $basket->stok = $request->stok;
        $basket->keterangan = $request->keterangan;
        $basket->user_id = FacadesAuth::user()->id;
        // $basket->user_id = $request->user_id;
        $basket->save();
        return redirect('penjual')->with('status','Keranjang berhasil di ubah');
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
        $destination = 'gambar/'.$basket->gambar;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        return redirect('penjual')->with('status','data berhasil ke hapus');
    }

}
