<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\JobPosition;
use App\Models\JobType;
use App\Models\SalaryAdvance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        SalaryAdvance::where([
            ['bulan', '=', Carbon::now()->isoFormat('MMMM')],
            ['tahun', '<', Carbon::now()->year]
        ])->delete();

        $employees = Employee::all();
        $operatorCount = 0;
        $helperCount = 0;

        foreach ($employees as $employee) {
            $employee->job_position->nama_posisi == "Operator" ? $operatorCount++ : $helperCount++;
        }

        return view('dashboard', compact('operatorCount', 'helperCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
