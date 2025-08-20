<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanical_report;
use App\Http\Requests\Mechanical_reportRequest;
use App\Models\Record;


class Mechanical_reportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $mechanical_reports = Mechanical_report::with('record')->paginate(10);
        return view('mechanical_reports.index', compact('mechanical_reports'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mechanical_reports = new Mechanical_report();
          $records = Record::all();
        return view('mechanical_reports.create', compact('mechanical_reports','records'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mechanical_report::create($request->validated());
        return redirect()->route('mechanical_reports.index')->with('success', 'Reporte mecánico creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mechanical_reports = Mechanical_report::find($id);
        return view('mechanical_report.show', compact('mechanical_reports'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mechanical_reports = Mechanical_report::find($id);
        $records = Record::all();
        return view('mechanical_reports.edit', compact('mechanical_report', 'mechanical_reports', 'records'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mechanical_reports = Mechanical_report::find($id);
        $mechanical_reports->update($request->validated());
        return redirect()->route('mechanical_reports.index')->with('update', 'Reporte mecánico actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mechanical_reports = Mechanical_report::find($id);
        $mechanical_reports->delete();
        return redirect()->route('mechanical_reports.index')->with('deleted', 'Reporte mecánico eliminado');
    }
}
