<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador_Producto extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Vista()
    {
        return view ('Vista_Producto');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function Editar()
    {
        return view ('Editar_Producto');
    }

    public function Crear()
    {
        return view ('Crear_Producto');
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
        //
    }
}
