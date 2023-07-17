<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\type;
use App\Models\mobil;
use Validator;
use File;
use Image;
use Auth;


class systemController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function addCategory(){
        $type= type::count();
        $tipe = type::get();
        $mobil = mobil::leftJoin('type_mobil','type_mobil.id_type','=','mobil.id_type')->get();
        return view('mobil.addCategory',compact('type','tipe','mobil') );
    }
    public function saveCategory(request $request){
        $merk = strtoupper($request->merk);
        $model = strtoupper($request->model);
        $type = new type;
        $type->id_type = $request->id_type;
        $type->merk = $merk;
        $type->model = $model;
        $type->save();
        alert()->success('Success','Category Success To Be Add');
        return redirect('/addCategory');
    }



    public function addCar(){
        return view('mobil.addCategory');
    }

    public function saveCar(request $request){
        $kode = explode(',', $request->code_car);
        $kode_mobil = $kode[0];
        $mobil = new mobil;
        $mobil->id_type = $kode_mobil;
        $nopol1 = strtoupper($request->nopol1);
        $nopol3 = strtoupper($request->nopol3);
        $mobil->nopol= $nopol1.$request->nopol2.$nopol3;
        $mobil->cc= $request->cc;
        $mobil->warna= $request->warna;
        $mobil->tarif= $request->tarif;

        $foto = $request->foto;
        $namafile =  rand(11111, 99999).'.'.$foto->getClientOriginalExtension(); 
        $request->foto->storeAs('thumbnail',$namafile);
        $foto->move('images/',$namafile); 
        $mobil->foto_mobil= $namafile; 
        $mobil->qty= 1;
        $mobil->save();

        alert()->success('Success','Car Success To Be Add');
        return redirect('/addCategory');
    }

   

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mobil = mobil::findOrFail($id)->delete();
        alert()->info('Success','Car Success To Be Delete');
        return redirect('/addCategory');
    }
}
