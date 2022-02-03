<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PorodilisteResource;
use App\Models\Porodiliste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PorodilisteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $porodilista = Porodiliste::all();
        return PorodilisteResource::collection($porodilista);
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
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'grad' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greška!', $validator->errors()]);
        }

        $porodiliste = Porodiliste::create([
            'naziv' => $request->naziv,
            'grad' => $request->grad,
        ]);

        return response()->json(['Porodilište je uspešno sačuvano u bazi podataka!', new PorodilisteResource($porodiliste)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Porodiliste  $porodiliste
     * @return \Illuminate\Http\Response
     */
    public function show(Porodiliste $porodiliste)
    {
        return new PorodilisteResource($porodiliste);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Porodiliste  $porodiliste
     * @return \Illuminate\Http\Response
     */
    public function edit(Porodiliste $porodiliste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Porodiliste  $porodiliste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Porodiliste $porodiliste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Porodiliste  $porodiliste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Porodiliste $porodiliste)
    {
        $porodiliste->delete();
        return response()->json(['Porodilište je uspešno obrisano iz baze podataka!', new PorodilisteResource($porodiliste)]);
    }
}
