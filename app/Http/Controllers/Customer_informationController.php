<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer_Information;
use App\Http\Requests\CustomerInformationRequest;   

class Customer_informationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer_Informations = Customer_Information::latest()->paginate(10);
        return view('customer_informations.index', compact('customer_Informations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer_Informations = new Customer_Information();
        return view('customer_informations.create', compact('customer_Informations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Customer_Information::create($request->validated());
        return redirect()->route('customer_informations.index')->with('success', 'Información del cliente creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer_Informations = Customer_Information::find($id);
        return view('customer_informations.show', compact('customer_Informations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer_Informations = Customer_Information::find($id);
        return view('customer_informations.edit', compact('customer_Informations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer_Informations = Customer_Information::find($id);
        $customer_Informations->update($request->validated());
        return redirect()->route('customer_informations.index')->with('success', 'Información del cliente actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer_Informations = Customer_Information::find($id);
        $customer_Informations->delete();
        return redirect()->route('customer_informations.index')->with('success', 'Información del cliente eliminada correctamente');
    }
}
