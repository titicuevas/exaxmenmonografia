<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMonografiaRequest;
use App\Http\Requests\UpdateMonografiaRequest;
use App\Models\Articulo;
use App\Models\Monografia;
use Illuminate\Auth\Events\Validated;

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

        return redirect()->route('monografias.index')->with('success', "La monografia $monografia->titulo se ha creado correctamente");
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

        //return $monografia->articulos;

        return view('monografias.show', ['monografia' => $monografia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function edit(Monografia $monografia)
    {

        return view('monografias.edit', ['monografia' => $monografia]);
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

        // dd($request -> Validated());
        $monografia->fill($request->Validated());
        $monografia->save();
        return redirect()->route('monografias.index')->with('success', "La monografia $monografia->titulo se ha actualizado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monografia $monografia)
    {


        $monografia->delete();

        return redirect()->route('monografias.index')->with('success', "La $monografia->titulo ha sido eliminada correctamente");
    }

    public function autores(Monografia $monografia)
    {





       /*  foreach ($monografia->articulos as $articulos) {
            dump('articulo'.$articulos->titulo);
            foreach ($articulos->autores as $autor) {

            dump('autor'.$autor->nombre);
        }
    } */


        return view('monografias.autores', ['monografia' => $monografia,]);
    }


    public function articulos()
    {
        $articulos = Articulo::all();


        return view('monografias.articulos', ['articulos' => $articulos]);
    }
}
