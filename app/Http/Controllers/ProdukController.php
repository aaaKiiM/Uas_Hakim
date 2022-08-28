<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        $nomor = 1;
        return view('pages.produk.index', compact('nomor','produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $toko = Toko::all();
        $kategori = Kategori::all();
        return view('pages.produk.form', compact('toko','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'foto' => 'required|file|mimes:png,jpg,jpeg|max:2048'
            ]
        );
        $nama_file = $request->foto->getClientOriginalName();
        $upload3 = $request->foto->move('img/produk', $nama_file);

        $produk = new Produk;

        $produk->tokos_id = $request->toko;
        $produk->kategoris_id = $request->kategori;
        $produk->nama_kue = $request->nama;
        $produk->harga = $request->harga;
        $produk->keterangan = $request->ket;
        $produk->stock = $request->stock;
        $produk->foto = $request->foto->getClientOriginalName();
        $produk->save();

        // $request->validate([
        //     'title' => 'required|min:3',
        //     'body' => 'required|min:3'
        // ]);
        return redirect('/produk')->with('success', 'Task Created Successfully!');
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
        $produk = Produk::find($id);
        $kategori = Kategori::all();
        $toko = Toko::all();

        return view('pages.produk.edit',compact('produk','kategori','toko'));
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
        $produk = Produk::find($id);

        $produk->tokos_id = $request->toko;
        $produk->kategoris_id = $request->kategori;
        $produk->nama_kue = $request->nama;
        $produk->harga = $request->harga;
        $produk->keterangan = $request->ket;
        $produk->stock = $request->stock;
        $produk->save();

        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/produk');
    }
}
