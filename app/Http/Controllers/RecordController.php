<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Http\Requests\RecordRequest;  
use App\Models\Inventory;
use App\Models\Customer_information;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Record::with('inventory','customer_information')->paginate(10);
        return view('records.index', compact('records'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $records = new Record();
        $inventories = Inventory::all();
        $customers_informations = Customer_information::all();
        return view('records.create', compact('records', 'inventories', 'customers_informations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecordRequest $request)
    {
        Record::create($request->validated());
        return redirect()->route('records.index')->with('success', 'Registro creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $records = Record::find($id);
        $inventories = Inventory::all();
        $customers_informations = Customer_information::all();
        return view('records.show', compact('records'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $records = Record::find($id);
        $inventories = Inventory::all();
        $customer_informations = Customer_information::all();
        return view('records.edit', compact('records',  'inventories','customer_informations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RecordRequest $request, string $id)
    {
        $records = Record::find($id);
        $records->update($request->validated());
        return redirect()->route('records.index')->with('update', 'Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $records = Record::find($id);
        $records->delete();
        return redirect()->route('records.index')->with('delete', 'Registro eliminado');
    }
}
