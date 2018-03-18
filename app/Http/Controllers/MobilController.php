<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mobil;
use App\konsumen;

class MobilController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
           $mobil = \App\mobil::paginate(10);
        return view('mobil.index',compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $konsumen= konsumen::all();
        return view('mobil.create',compact('konsumen'));
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
         $mobil=new mobil;
         $mobil->mk = $request->m;
         $mobil->nk = $request->a;
         $mobil->warna= $request->w;
         $mobil->id_konsumen = $request->id_konsumen;
         $mobil->plat_nomer = $request->d;
         $mobil->save();
        return redirect()->route('mobil.index');
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
         $mobil = mobil::findOrFail($id);
        return view('mobil.show', compact('mobil'));
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
        $konsumen=konsumen::all();
         $mobil = mobil::findOrFail($id);
        return view('mobil.edit', compact('konsumen','mobil'));
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
         $mobil = mobil::findOrFail($id);
         $mobil->mk = $request->m;
         $mobil->nk = $request->a;
         $mobil->warna= $request->w;
         $mobil->id_konsumen = $request->id_konsumen;
         $mobil->plat_nomer = $request->plat;
         $mobil->save();
        return redirect()->route('mobil.index');
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

        $mobil = mobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('mobil.index');
    }
     
     public function search(Request $request)
    {
        $query = $request->get('id');
        $mobil = mobil::where('id', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('mobil.hasil', compact('mobil','query'));
    }

}