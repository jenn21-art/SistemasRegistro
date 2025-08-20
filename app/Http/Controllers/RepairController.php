<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repair;
use App\Http\Requests\RepairRequest;
use App\Models\Staff;    

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $repairs = Repair::With('staff')->paginate(10);
        return view('repairs.index', compact('repairs'));   
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $repairs = new Repair();
        $staffs = Staff::all();
        return view('repairs.create', compact('repairs', 'staffs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Repair::create($request->validated());
        return redirect()->route('repairs.index')->with('success', 'Reparación creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $repairs = Repair::find($id);
        return view('repair.show', compact('repairs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $repairs = Repair::find($id);
        $staffs = Staff::all();
        return view('repairs.edit', compact('repair', 'repairs','staffs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $repairs = Repair::find($id);
        $repairs->update($request->validated());
        return redirect()->route('repairs.index')->with('success', 'Reparación actualizada');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $repairs = Repair::find($id);
        $repairs->delete();
        return redirect()->route('repairs.index')->with('success', 'Reparación eliminada');
    }
}
