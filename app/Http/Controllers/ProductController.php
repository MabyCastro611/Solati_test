<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products as ModelsProducts;


class ProductController extends Controller
{
    public function index(Request $request){
        $products = ModelsProducts::all();

        if (!empty($products)) {
            return response()->json($products);
        } else {
            return response()->json([
                'message' => 'Not Found',
            ], 404);
        }
    }

    public function store(Request $request)
    {
        // Valida los datos del formulario, si es necesario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|string',
        ]);

        // Crea un nuevo producto en la base de datos
        $product = new ModelsProducts;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        // Devuelve una respuesta JSON indicando que el producto se ha creado con éxito
        return response()->json([
            'message' => 'Producto creado con éxito',
            'product' => $product,
        ], 201); // 201 significa "Creado" en el estándar HTTP
    }
}
