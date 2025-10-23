<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    // Affiche une liste de la ressource
    public function index()
    {
        // Récupère 8 produits
        $products = Product::limit(8)->get();

        $categories = Category::limit(5)->get();

        // Affiche la liste
        return view('index', compact('products', 'categories'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Récupérer les données
        // Sélectionner un produit à partir de son identifiant
        $product = Product::find($id);
        
        return view('detail', compact('product'));
        
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
