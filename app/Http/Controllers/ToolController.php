<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;
use App\Http\Requests\ToolRequest;
use Illuminate\Validation\Rule;


class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    $tools = Tool::latest()->paginate(10);
    return view('tools.index', compact('tools'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tools = new Tool();
        return view('tools.create', compact('tools'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ToolRequest $request)
    {
        Tool::create($request->validated());
        return redirect()->route('tools.index')->with('success','Herramienta creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $tools = Tool::find($id);
        return view('tools.show', compact('tools'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $tools = Tool::find($id);
        return view('tools.edit', compact('tools'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ToolRequest $request, int $id)
    {
        $tools = Tool::find($id);
        $tools->update($request->validated());
        return redirect()->route('tools.index')->with('updated','Heramienta actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        
        $tools = Tool::find($id);
        $tools->delete();
        return redirect()->route('tools.index')->with('deleted','Herramienta Eliminado correctamente');
    
    }
}





