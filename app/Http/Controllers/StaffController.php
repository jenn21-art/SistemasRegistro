<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Http\Requests\StaffRequest;
use Illuminate\Validation\Rule;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    $staffs = Staff::latest()->paginate(10);
    return view('staffs.index', compact('staffs'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $staffs = new Staff();
        return view('staffs.create', compact('staffs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StaffRequest $request)
    {
        Staff::create($request->validated());
        return redirect()->route('staffs.index')->with('success','Personal creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $staffs = Staff::find($id);
        return view('staffs.show', compact('staffs'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $staffs = Staff::find($id);
        return view('staffs.edit', compact('staffs'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StaffRequest $request, int $id)
    {
        $staffs = Staff::find($id);
        $staffs->update($request->validated());
        return redirect()->route('staffs.index')->with('updated','Personal actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        
        $staffs = Staff::find($id);
        $staffs->delete();
        return redirect()->route('staffs.index')->with('deleted','Personal Eliminado correctamente');
    
    }
}
