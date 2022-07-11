<?php

namespace App\Http\Controllers;

use App\Models\Pakaian;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('transaksi')
            ->join('pakaians', 'pakaians.id_pakaian', '=', 'transaksi.pakaian_transaksi')
            ->join('pelanggan', 'pelanggan.id_pelanggan', '=', 'transaksi.pelanggan_transaksi')
            ->orderBy('id_transaksi', 'ASC')
            ->get();

        return view('transaksi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pakaians = Pakaian::all();
        $pelanggans = Pelanggan::all();
        return view('transaksi.create', compact('pakaians', 'pelanggans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pelanggan_transaksi' => 'string',
            'pakaian_transaksi' => 'string',
            'berat_transaksi' => 'numeric',
        ]);

        Transaksi::create($validatedData);
        return redirect('/transaksi');
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
        $pakaians = Pakaian::all();
        $pelanggans = Pelanggan::all();
        $data = DB::table('transaksi')
            ->join('pakaians', 'pakaians.id_pakaian', '=', 'transaksi.pakaian_transaksi')
            ->join('pelanggan', 'pelanggan.id_pelanggan', '=', 'transaksi.pelanggan_transaksi')
            ->where('id_transaksi', $id)
            ->get();

        return view('transaksi.edit', compact('data', 'pakaians', 'pelanggans'));
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
        $validatedData = $request->validate([
            'pelanggan_transaksi' => 'string',
            'pakaian_transaksi' => 'string',
            'berat_transaksi' => 'numeric',
        ]);

        $transaksi = Transaksi::find($id);
        $transaksi->pelanggan_transaksi = $request->input('pelanggan_transaksi');
        $transaksi->pakaian_transaksi = $request->input('pakaian_transaksi');
        $transaksi->berat_transaksi = $request->input('berat_transaksi');
        $transaksi->update($validatedData);

        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();

        return redirect('/transaksi');
    }
}
