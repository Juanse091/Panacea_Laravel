<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Persona;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    public $persona;
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {   
        $persona = Persona::create([
            'NUIP' => intval($request->NUIP),
            'Nombre_Persona' => $request->Nombre_Persona,
            'Telefono_Movil' => $request->Telefono_Movil,
            'Email' => $request->Email,
            'Direccion' => $request->Direccion,
            
        ]);

        
        
        return response()->json(['message' => 'ok']);
    }

    public function store_user(Request $request): RedirectResponse
    {
        $user = User::create([
            'Nombre_Usuario' => intval($request->Nombre_Usuario),
            'Hast' => Hash::make($request->Hast),
            'Tipo_Usuario_idTipo_Usuario' => '4',
            'Estado_Usuario' => 'Activo',
            'PERSONA_NUIP' => intval($request->Nombre_Usuario),
        ]);
        

        event(new Registered($user));
        Auth::login($user);


        return redirect()->route('homepage');
        
    }
}
