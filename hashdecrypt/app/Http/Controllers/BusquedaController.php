<?php

namespace App\Http\Controllers;

use App\Models\Busqueda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('busqueda.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $name = Busqueda::firstOrCreate(
            ['palabra' =>  request('palabra')]
        );

        $name->contador++;

        $name->save();

        $deuPrimers = Busqueda::
                        select('palabra')
                        ->orderByRaw('contador DESC')
                        ->limit(10)
                        ->get();

        $deuRandom = Busqueda::
                        select('palabra')
                        ->inRandomOrder()
                        ->limit(10)
                        ->get();

        //$retornar = [$name,$deuPrimers,$deuRandom];

        return view('busqueda.show',compact('name','deuRandom','deuPrimers'));

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
