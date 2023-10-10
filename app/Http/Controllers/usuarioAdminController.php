<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\UsuariosAfiliado; //!2
use App\Models\UsuariosConsorcio; //!3
use App\Models\UsuariosParticular; //!4

class usuarioAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        switch ($request->categorie) {

            case 2:
                $usuarios = UsuariosAfiliado::all();
                return response()->json(['usuarios' => $usuarios]);
                
            case 3:
                $usuarios = UsuariosConsorcio::all();
                return response()->json(['usuarios' => $usuarios]);
                
            case 4:
                $usuarios = UsuariosParticular::all();
                return response()->json(['usuarios' => $usuarios]);
                
            default:
                return response()->json(['Error'=> 'No se ha encontrado ningun usuario']);
        };

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
