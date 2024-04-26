<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ], [
            'name.required' =>'Es necesario ingresar un nombre para la categoría.'

        ]);

        Categoria::create($request->all());

        return back();

    }
}
