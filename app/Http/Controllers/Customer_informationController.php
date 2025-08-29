<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Customer_InformationControllers;
use Illuminate\Http\Request;
use App\Models\Customer_Information;
use App\Http\Requests\Customer_InformationRequest;   

class Customer_informationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer_informations = Customer_Information::latest()->paginate(10);
        return view('customer_informations.index', compact('customer_informations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer_informations = new Customer_Information();
        return view('customer_informations.create', compact('customer_informations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Customer_informationRequest $request)
    {
        Customer_Information::create($request->validated());
        return redirect()->route('customer_informations.index')->with('success', 'Información del cliente creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer_informations = Customer_Information::find($id);
        return view('customer_informations.show', compact('customer_informations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer_informations = Customer_Information::find($id);
        return view('customer_informations.edit', compact('customer_informations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Customer_informationRequest $request, string $id)
    {
        $customer_informations = Customer_Information::find($id);
        $customer_informations->update($request->validated());
        return redirect()->route('customer_informations.index')->with('success', 'Información del cliente actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer_informations = Customer_Information::find($id);
        $customer_informations->delete();
        return redirect()->route('customer_informations.index')->with('success', 'Información del cliente eliminada correctamente');
    }
}
