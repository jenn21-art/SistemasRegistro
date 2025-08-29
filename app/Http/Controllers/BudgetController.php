<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Http\Requests\BudgetRequest; 
use App\Models\Record;


  

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budgets = Budget::with('records')->paginate(10);
        return view( 'budgets.index',compact('budgets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $budgets = new Budget();
        $records = Record::all();
        return view('budgets.create', compact('budgets','records'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BudgetRequest $request)
    {
        Budget::create($request->validated());
        return redirect()->route('budgets.index')->with('success', 'Presupuesto creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $budgets = Budget::find($id);
        $records = Record::all();
        return view('budgets.show', compact('budgets'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $budgets = Budget::find($id);
        $records =  Record::all();
        return view('budgets.edit',compact('budget','budgets','records'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BudgetRequest $request, int $id)
    {
        $budgets = Budget::find($id);
        $budgets->update($request->validated());
        return redirect()->route('budgets.index')->with('update', 'Presupuesto actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $budgets = Budget::find($id);
        $budgets->delete();
        return redirect()->route('budgets.index')->with('delete', 'Presupuesto eliminado');
    }
}
