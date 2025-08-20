<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle_Information;
use App\Http\Requests\VehicleInformationRequest;    

class Vehicle_informationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
          $vehicle_Informations = Vehicle_Information::latest()->paginate(10);
       return view('vehicle_Informations.index',compact(var_name: 'Vehicle_Informations'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicle_Informations = new Vehicle_Information();
        return view('vehicle_Informations.create', compact('vehicle_Informations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Vehicle_Information::create($request->validated());
        return redirect()->route('vehicle_Informations.index')->with('success', 'Información del vehículo creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vehicle_Informations = Vehicle_Information::find($id);
        return view('vehicle_Informations.show', compact('vehicle_Informations'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vehicle_Informations = Vehicle_Information::find($id);
        return view('vehicle_Informations.edit', compact('vehicle_Informations'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vehicle_Informations = Vehicle_Information::find($id);
        $vehicle_Informations->update($request->validated());
        return redirect()->route('vehicle_Informations.index')->with('success', 'Información del vehículo actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehicle_Informations = Vehicle_Information::find($id);
        $vehicle_Informations->delete();
        return redirect()->route('vehicle_Informations.index')->with('success', 'Información del vehículo eliminada correctamente');    
    }
}
