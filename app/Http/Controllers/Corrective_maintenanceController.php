<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Corrective_maintenanceControllers;

use Illuminate\Http\Request;
use App\Models\Corrective_maintenance;
use App\Http\Requests\Corrective_MaintenanceRequest;
use App\Models\Staff;

class Corrective_maintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $corrective_maintenances = Corrective_maintenance::with('staff')->paginate(10);
        return view('corrective_maintenances.index', compact('corrective_maintenances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $corrective_maintenances = new Corrective_maintenance();
        $staffs = Staff::all();
        return view('corrective_maintenances.create', compact('corrective_maintenances','staffs'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Corrective_maintenanceRequest $request)
    {
        Corrective_maintenance::create($request->validated());
        return redirect()->route('corrective_maintenances.index')->with('success', 'Mantenimiento correctivo creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $corrective_maintenances = Corrective_maintenance::find($id);
        $staffs = Staff::all();
        return view('corrective_maintenances.show', compact('corrective_maintenances','staffs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $corrective_maintenances = Corrective_maintenance::find($id);
        $staffs = Staff::all();
        return view('corrective_maintenances.edit', compact('corrective_maintenances', 'corrective_maintenances','staffs'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Corrective_maintenanceRequest $request, string $id)
    {
        $corrective_maintenances = Corrective_maintenance::find($id);
        $corrective_maintenances->update($request->validated());
        return redirect()->route('corrective_maintenances.index')->with('success', 'Mantenimiento correctivo actualizado'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $corrective_maintenances = Corrective_maintenance::find($id);
        $corrective_maintenances->delete();
        return redirect()->route('corrective_maintenances.index')->with('success', 'Mantenimiento correctivo eliminado');
    }
}
