<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanical_history;  
use App\Http\Requests\Mechanical_historyRequest;
use App\Models\Record;


class Mechanical_historyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $mechanical_histories = Mechanical_history::with('mechanical_history')->paginate(10);
        return view('mechanical_histories.index', compact('mechanical_histories'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mechanical_histories = new Mechanical_history();
         $records = Record::all();
        return view('mechanical_histories.create', compact('records','mechanical_histories'));    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mechanical_history::create($request->validated());
        return redirect()->route('mechanical_histories.index')->with('success', 'Historial mecánico creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mechanical_histories = Mechanical_history::find($id);
        return view('mechanical_history.show', compact('mechanical_histories'));
  
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mechanical_histories = Mechanical_history::find($id);
        $records = Record::all();
        return view('mechanical_histories.edit', compact('mechanical_history','mechanical_histories','records'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mechanical_histories = Mechanical_history::find($id);
        $mechanical_histories->update($request->validated());
        return redirect()->route('mechanical_histories.index')->with('update', 'Historial mecánico actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mechanical_histories = Mechanical_history::find($id);
        $mechanical_histories->delete();
        return redirect()->route('mechanical_histories.index')->with('deleted', 'Historial mecánico eliminado');
    }
}
