<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use App\mobil;



class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $tran= \App\transaksi::paginate(10);
    return view('transaksi.index', compact('tran'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $mobil= mobil::all();
        return view('transaksi.create',compact('mobil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $tran = new transaksi;
         $tran->id_mobil=$request->id_mobil;
        $tran->tanggal=$request->t;
        $tran->harga = $request->e;
        $tran->total = $request->e;
        $tran->save();
        return redirect()->route('tran.index');
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
        
        $mobil=mobil::all();
        $tran = transaksi::findOrFail($id);
        return view('transaksi.edit', compact('tran','mobil'));
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
         $tran = transaksi::findOrFail($id);
          $tran->id_mobil=$request->id_mobil;
        $tran->tanggal=$request->t;
        $tran->harga = $request->e;
        $tran->total = $request->e;
        $tran->save();
        return redirect()->route('tran.index');
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
        $tran = transaksi::findOrFail($id);
        $tran ->delete();
        return redirect()->route('tran.index');
    
    }
       public function search(Request $request)
    {
     $query = $request->get('id');
        $tran = transaksi::where('id', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('transaksi.hasil', compact('tran', 'query'));
    }
}
