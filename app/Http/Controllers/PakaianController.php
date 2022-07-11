<?php

namespace App\Http\Controllers;

use App\Models\Pakaian;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PakaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pakaian::all();
        return view('pakaian.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pakaian.create');
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
            'jenis_pakaian' => 'string',
            'harga_perkilo' => 'numeric',
        ]);

        Pakaian::create($validatedData);
        return redirect('/pakaian');
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
        $data = Pakaian::find($id);
        return view('pakaian.edit', compact('data'));
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
            'jenis_pakaian' => 'string',
            'harga_perkilo' => 'numeric',
        ]);

        $pakaian = Pakaian::find($id);
        $pakaian->jenis_pakaian = $request->input('jenis_pakaian');
        $pakaian->harga_perkilo = $request->input('harga_perkilo');
        $pakaian->update($validatedData);

        return redirect('/pakaian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pakaian = Pakaian::find($id);
        $pakaian->delete();

        return redirect('/pakaian');
    }
}
