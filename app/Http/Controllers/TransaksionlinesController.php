<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksionline;
use App\TransaksionlinesDetails;
use Auth;
use App\User;
use App\Barang;
use App\Basket;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class TransaksionlinesController extends Controller
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
        $transaksionlines = $user->transaksionlines;
        if ($barangs = $user->barangs) {
            // return redirect('barangs');
            error_reporting(0);
            }
            // else {
            //     error_reporting(0);
            // }
        return view('transaksionline.index',compact('transaksionlines','barangs'));
    }
    public function datato(){
        // khusus admin
    $baskets = Basket::all();
    $transaksionlines = Transaksionline::all();
    return view('transaksionline.datato',compact('transaksionlines','baskets'));
    }

    public function historytransaksionline()
    {
        // $user = Auth::user();
        // $cod = $user->cod;
        error_reporting(0);
        $user = FacadesAuth::user();
        $transaksionlines = $user->transaksionlines;
        $barangs = Barang::all();
        return view('transaksionline.historytransaksionline',compact('transaksionlines','barangs'));
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
        return view('transaksionline.create',compact('barangs','baskets'));
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
            'barangs_id'=>'required',
            'stok' => 'required',
            'baskets_id'=>'required',
            'kartu'=>'required',
            // 'pengiriman'=>'required',
            'alamat_pengiriman' => 'required',
            'totalbelanja' => 'required',
        ]);
        $imgName = $request->bukti->getClientOriginalName().'-'. time().'.'. $request->bukti->extension();

        $request->bukti->move(public_path('image'), $imgName);

        $data = $request->all();
        $transaksionline = new Transaksionline();
        $transaksionline->kartu = $data['kartu'];
        $transaksionline->status ="";
        $transaksionline->bukti = $imgName;
        $transaksionline->alamat_pengiriman = $data['alamat_pengiriman'];
        $transaksionline->totalbelanja = $data['totalbelanja'];
        $transaksionline->kode_unik = mt_rand(100,5000);
        $transaksionline->user_id = FacadesAuth::user()->id;
        $transaksionline->save();
        if (count($data['kodeunik']) > 0) {
            foreach ($data['kodeunik'] as $item => $value) {
                $data2 = array(
                    'transaksionlines_id' => $transaksionline->id,
                    'kodeunik' => $data['kodeunik'][$item],
                    'barangs_id' => $data['barangs_id'][$item],
                    'baskets_id' => $data['baskets_id'][$item],
                    'stok' => $data['stok'][$item],
                    'hargabeli' => $data['hargabeli'][$item],
                    'totalharga' => $transaksionline->totalbelanja,
                    'user_id' => FacadesAuth::user()->id
                );
                TransaksionlinesDetails::create($data2);
            }
        }
        // $baskets = Basket::findorFail($request->baskets_id);
        // $baskets->stok -= $request->stok;
        // $baskets->save();
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
        $transaksionline = Transaksionline::find($id);
        return view('transaksionline.edit',compact('transaksionline'));
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
        $request->validate([
            'status'=>'numeric|required|min:12345678,max:12345678'
        ]);
        $transaksionline = Transaksionline::find($id);
        $transaksionline->status = $request->status;
        $transaksionline->save();
        return redirect('/transaksionline')->with('status','data anda berhasil tersimpan di server dan akan segera di kirim');
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
