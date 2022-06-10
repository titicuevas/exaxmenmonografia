<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMonografiaRequest;
use App\Http\Requests\UpdateMonografiaRequest;
use App\Models\Monografia;

class MonografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monografias = Monografia::all();
        return view('monografias.index', ['monografias' => $monografias]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $monografia = new Monografia();



        return view('monografias.create', ['monografia' => $monografia]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMonografiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMonografiaRequest $request)
    {
        $validados = $request->validated();

        $monografia = new Monografia($validados);


        $monografia->save();

        return redirect()->route('monografias.index')->with('success',"La monografia $monografia->titulo se ha creado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function show(Monografia $monografia)
    {
        //return 'show'.$monografia;

        return view('monografias.show',['monografia'=>$monografia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function edit(Monografia $monografia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMonografiaRequest  $request
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMonografiaRequest $request, Monografia $monografia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monografia $monografia)
    {
        //
    }
}
