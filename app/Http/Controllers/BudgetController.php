<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget;
use App\Http\Requests\BudgetRequest; 
use App\Models\Vehicle_information;   

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budgets = Budget::with('vehicle_information')->paginate(10);
        return view('budgets.index', compact('budgets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           $budgets = new Budget();
        $vehicle_informations = Vehicle_information ::all();
        return view('vehicle_informations.create', compact('budgets','vehicle_informations'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Budget::create($request->validated());
        return redirect()->route('budgets.index')->with('success', 'Presupuesto creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $budgets = Budget::find($id);
        return view('budget.show', compact('budgets'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
           $budgets = Budget::find($id);
        $vehicle_informations =  Vehicle_information::all();
        return view('budgets.edit',compact('budget','budgets','vehicle_informations'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $budgets = Budget::find($id);
        $budgets->update($request->validated());
        return redirect()->route('budgets.index')->with('update', 'Presupuesto actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $budgets = Budget::find($id);
        $budgets->delete();
        return redirect()->route('budgets.index')->with('delete', 'Presupuesto eliminado');
    }
}
