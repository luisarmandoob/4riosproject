<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    public function guardarOpinion(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'nombre' => ['required', 'string', 'max:255'],
            'opinion' => ['required', 'in:1,2,3'],
        ]);

        $opinion = new Opinion();
        $opinion->email = $validated['email'];
        $opinion->nombre = $validated['nombre'];
        $opinion->opinion = $validated['opinion'];
        $opinion->save();

        return back()->with('success', 'Comentario guardado correctamente.');
    }
}