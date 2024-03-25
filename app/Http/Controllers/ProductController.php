<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Product/index', ['product' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Product/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "name" => ['required'],
            "price" => ['required'],
            "unite" => ['required'],
        ], ['required' => ':attribute est obligatoire.',]);

        Product::create($request->all());

        return redirect(route('product.index'))->with('status', ['type' => 'store-success', 'action' => 'Ajouté !', 'text' => 'ADDED!']);
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
        Product::find($id);
        return Inertia::render('Product/edit', ['product' => Product::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Product::find($id)
            ->update($request->all());

        return redirect(route('product.index'))->with('status', ['type' => 'update-success', 'action' => 'Modifer !', 'text' => 'UPDATED!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)
            ->delete();

        return redirect(route('product.index'))->with('status', ['type' => 'destroy-success', 'action' => 'Supprimer !', 'text' => 'DELETED!']);;;
    }
}
