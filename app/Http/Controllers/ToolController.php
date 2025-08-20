<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;
use App\Http\Requests\ToolRequest;
use App\Models\Inventory;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $tools = Tool::with('inventory')->paginate(10);
        return view('tools.index', compact('tools'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tools = new Tool();
        $inventories = Inventory::all();
        return view('tools.create', compact('tools','inventories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Tool::create($request->validated());
        return redirect()->route('tools.index')->with('success','Herramienta creada');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            $tools = Tool::find($id);
        return view('tool.show', compact('tools'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tools = Tool::find($id);
        $inventories =  Inventory::all();
        return view('tools.edit',compact('tool','tools','inventories'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tools = Tool::find($id);
        $tools->update($request->validated());
        return redirect()->route('tools.index')->with('update','Herramienta actualizada');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $tools = Tool::find($id);
       $tools->delete();
       return redirect()->route('tools.index')->with('delete','Herramienta eliminada');
    }
}
