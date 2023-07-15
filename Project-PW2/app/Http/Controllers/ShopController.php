<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pesanan;

class ShopController extends Controller
{
    public function home(){
        return view('shop/home');
    }

    public function product(){
        return view('shop/product');
    }

    public function blog(){
        return view('shop/blog');
    }

    public function about(){
        return view('shop/about');
    }

    public function contact(){
        return view('shop/contact');
    }

    public function cart(){
        return view('shop/cart');
    }

    public function pdetail(){
        return view('shop/pdetail');
    }

    public function bdetail(){
        return view('shop/bdetail');
    }

    public function checkout(){
        return view('shop/checkout');
    }

    public function pay(){
        return view('shop/pay');
    }

    public function login(){
        return view('shop/login');
    }

    public function register(){
        return view('shop/register');
    }

    public function produk(){
        $produk = Produk::all();
        return view('shop/produk', compact('produk'));
    }

    public function toko(Request $request){
        $request->validate([
            'kode'            => 'required',
            'nama_produk'     => 'required',
            'harga'           => 'required',
            'jumlah'          => 'required',
            'jenis_produk_id' => 'required'
        ]);
        Produk::create($request->all());
        return redirect()->route('produk.produk')->with('success', 'Product created successfully');
    }

    public function edit(Produk $produks){
        return view('shop/edit', compact('produks'));
    }

    public function destroy(Produk $produks){
        $produks->delete();
        return redirect()->route('produk.produk')->with('success', 'Product deleted successfully');
    }

    public function update(Request $request, Produk $produks){
        $request->validate([
            'kode'            => 'required',
            'nama_produk'     => 'required',
            'harga'           => 'required',
            'jumlah'          => 'required',
            'jenis_produk_id' => 'required'
        ]);
        $produks->update($request->all());
        return redirect()->route('produk.produk')->with('success', 'Product updated successfully');
    }

    public function pesanan(){
        $pesanan = Pesanan::all();
        return view('shop/pesanan', compact('pesanan'));
    }

    public function store(Request $request){
        $request->validate([
            'tanggal'        => 'required',
            'nama_pemesan'   => 'required',
            'alamat'         => 'required',
            'no_hp'          => 'required',
            'total'          => 'required',
            'produk_id'      => 'required',
            'pembayaran'     => 'required'
        ]);
        Pesanan::create($request->all());
        return redirect()->route('pesanan.pesanan')->with('success', 'Customer created successfully');
    }

    public function tambah(Pesanan $pesanans){
        return view('shop/tambah', compact('pesanans'));
    }

    public function hapus(Pesanan $pesanans){
        $pesanans->delete();
        return redirect()->route('pesanan.pesanan')->with('success', 'Customer deleted successfully');
    }

    public function ubah(Request $request, Pesanan $pesanans){
        $request->validate([
            'tanggal'        => 'required',
            'nama_pemesan'   => 'required',
            'alamat'         => 'required',
            'no_hp'          => 'required',
            'total'          => 'required',
            'produk_id'      => 'required',
            'pembayaran'     => 'required'
        ]);
        $pesanans->update($request->all());
        return redirect()->route('pesanan.pesanan')->with('success', 'Customer updated successfully');
    }

}