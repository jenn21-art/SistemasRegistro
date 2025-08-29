<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Corrective_maintenance;
use App\Models\Repair;
use App\Http\Requests\InvoiceRequest;
use App\Http\Requests\Corrective_maintenanceRequest;




class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::with('repair','corrective_maintenance')->paginate(10);
        return view('invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $invoices = new Invoice();
        $repairs = Repair::all(); 
        $corrective_maintenances = Corrective_maintenance::all();
        return view('invoices.create', compact('invoices','repairs','corrective_maintenances'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InvoiceRequest $request)
    {
        Invoice::create($request->validated());
        return redirect()->route('invoices.index')->with('success', 'Factura creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $invoices = Invoice::find($id);
        $repairs = Repair::all();
        $corrective_maintenances = Corrective_maintenance::all();
        return view('invoices.show', compact('invoices','repairs','corrective_maintenances'));
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(string $id)
{
    $invoices = Invoice::findOrFail($id);
    $repairs = Repair::all();
    $corrective_maintenances = Corrective_maintenance::all();

    return view('invoices.edit', compact('invoices','repairs','corrective_maintenances'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(InvoiceRequest $request, string $id)
    {
        $invoices = Invoice::find($id);
        $invoices->update($request->validated());
        return redirect()->route('invoices.index')->with('success', 'Factura actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $invoices = Invoice::find($id);
       $invoices->delete();
       return redirect()->route('invoices.index')->with('delete','Herramienta eliminada');
    
    }
}
