<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\DoktorResource;
use App\Models\Doktor;
use Illuminate\Http\Request;

class DoktorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doktori = Doktor::all();
        return DoktorResource::collection($doktori);
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
     * @param  \App\Models\Doktor  $doktor
     * @return \Illuminate\Http\Response
     */
    public function show(Doktor $doktor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doktor  $doktor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doktor $doktor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doktor  $doktor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doktor $doktor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doktor  $doktor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doktor $doktor)
    {
        $doktor->delete();
        return response()->json(['Doktor je uspešno obrisan iz baze podataka!', new DoktorResource($doktor)]);
    }
}
