<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAutorRequest;
use App\Http\Requests\UpdateAutorRequest;
use App\Models\Autor;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autor::all();
        return view('autores.index',['autores'=> $autores]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autor= new Autor();

        return view ('autores.create',['autor'=>$autor]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAutorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutorRequest $request)
    {
        $autor = new Autor($request->validated());
        $autor->save();

        return redirect(route('autores.index'))->with('success',"El $autor->nombre se ha creado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autor)
    {
        return view ('autores.show',['autor'=>$autor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autor)
    {
        return view ('autores.edit',['autor'=>$autor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutorRequest  $request
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutorRequest $request, Autor $autor)
    {
        $autor->fill($request->validated());

        $autor->save();

        return redirect(route('autores.index'))->with('success',"El $autor->nombre se ha modificado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {
        $autor ->delete();

        return redirect(route('autores.index'))->with('success',"El $autor->nombre ha sido borrado");
    }
}
