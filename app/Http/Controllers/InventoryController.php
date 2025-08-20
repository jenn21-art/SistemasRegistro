<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Http\Requests\InventoryRequest;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
          $inventories = Inventory::latest()->paginate(10);
       return view('inventories.index',compact('inventories'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $inventories = new Inventory();
            return view('inventories.create', compact('inventories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Inventory::create($request->validated());
        return redirect()->route('inventories.index')->with('success', 'Inventario creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inventories = Inventory::find($id);
        return view('inventories.show', compact('inventories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $inventories = Inventory::find($id);
        return view('inventories.edit', compact('inventories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inventories = Inventory::find($id);
        $inventories->update($request->validated());
        return redirect()->route('inventories.index')->with('updated', 'Inventario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inventories = Inventory::find($id);
        $inventories->delete();
        return redirect()->route('inventories.index')->with('deleted', 'Inventario eliminado correctamente');
    }
}
