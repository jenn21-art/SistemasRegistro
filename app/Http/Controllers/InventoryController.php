<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Http\Requests\InventoryRequest;
use App\Models\Tool;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::with('tool')->paginate(10);
        return view('inventories.index', compact('inventories'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $inventories = new Inventory();
        $tools = Tool::all();
        return view('inventories.create', compact('tools','inventories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InventoryRequest $request)
    {
         Inventory::create($request->validated());
        return redirect()->route('inventories.index')->with('success','Inventario creado');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            $inventories = Inventory::find($id);
        return view('inventory.show', compact('inventories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $inventories = Inventory::find($id);
        $tools =  Tool::all();
        return view('inventories.edit',compact('inventories','tools'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InventoryRequest $request, string $id)
    {
        $inventories = Inventory::find($id);
        $inventories->update($request->validated());
        return redirect()->route('inventories.index')->with('update','Inventario actualizado');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $inventories = Inventory::find($id);
       $inventories->delete();
       return redirect()->route('inventories.index')->with('delete','Inventario eliminado');
    }
}
