<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Barang;
use App\User;
use App\Basket;
use Alert;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class BarangsController extends Controller
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
        //$barangs = Barang::with('baskets')->paginate(2);
        $user = FacadesAuth::user();
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
        $baskets = Basket::all();
        return view('barangs.create',compact('baskets'));
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
            'stok' => 'required|numeric',
            'totalharga' => 'required',
        ]);
        $barang = new Barang;
        $barang->baskets_id = $request->baskets_id;
        $barang->totalharga = $request->totalharga;
        $barang->stok = $request->stok;
        $barang->user_id = $request->user_id;
        // 
        if ($request->stok > $barang->baskets->stok) {
            alert()->info('Stok Yang Anda Beli Terlalu Banyak','#informasi');
            return redirect('/baskets')->with('info','stok yang di beli terlalu banyak');
        }else {
            $barang->stok = $request->stok;
            // $baskets = Basket::findorFail($request->baskets_id);
            // $baskets->stok -= $request->stok;
            // $baskets->save();
            $barang->save();
            alert()->success('keranjang berhasil di tambah','sukses');
            return redirect('/baskets');
        }
    }

    public function updateqty(Request $request, $id){
        $barangs = Barang::find($id);
        $satu = $barangs->baskets->hargabarang;
        $barangs->baskets_id = $request->baskets_id;
        if ($request->stok > $barangs->baskets->stok) {
        alert()->info('keranjang Gagal di Update','info');
        return redirect('/barangs');
        }elseif ($request->stok < 1) {
        alert()->info('keranjang Gagal di Update','info');
        return redirect('/barangs');
        }else {
        $barangs->stok = $request->stok;
        $barangs->totalharga = $satu * $barangs->stok;
        $barangs->save();
        alert()->success('keranjang berhasil di Update','sukses');
        return redirect('/barangs');
        }
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
        // $baskets = Basket::all();
        // $barang = Barang::with('baskets')->findorfail($id);
        // return view('barangs.edit',compact('barang','baskets'));
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
        // Barang::where('id', $barang->id)
        // ->update([
        //     // 'namabarang' => $request->namabarang,
        //     //'hargabarang' => $request->hargabarang,
        //     'stok' => $request->stok,
        //     'totalharga' => $request->totalharga
        // ]);
        // return redirect('baskets')->with('status','Barang berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $value = Barang::where('id',$id);
        // $barang = Basket::where('id',$value->value('baskets_id'));
        // $barang->update(["stok"=>(int) $barang->value('stok') + (int) $value->first()->stok]);
        Barang::destroy($id);
        alert()->success('keranjang berhasil di Hapus','sukses');
        return redirect('/baskets');
    }
    // public function hapus($id)
    // {
	// DB::table('barangs')->where('id',$id)->delete();
	// return redirect('/checkout')->with('status','berhasilguys');
    // }
    // public function checkout(){
    //     // $barangs = Barang::all();
    //     $user = Auth::user();
    //     $barangs = $user->barangs;
    //     return view('barangs.checkout',compact('barangs'));
    // }
    // public function trash(){
    // $barangs = Barang::onlyTrashed()->get();
    // return view('barangs.trash',compact('barangs'));
    // }
    public function delete($id)
{
    // DB::table('barangs')->where('user_id',$id)->delete();
    $barangs = Barang::where('user_id',$id);
    $barangs->delete();
    alert()->success('keranjang berhasil di Konfirmasi','suksess');
    return redirect('baskets');
}
}
