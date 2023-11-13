<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\SalaryAdvance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class SalaryAdvanceController extends Controller
{
    public function index()
    {
        $advanceSalaries = SalaryAdvance::orderBy('created_at', 'ASC')->get();
        return view('payroll.advance-salary-table', compact('advanceSalaries'));
    }

    public function create()
    {
        $employees = Employee::orderBy('nama_lengkap', 'ASC')->get();
        $employeeSalaries = SalaryAdvance::all();
        return view('payroll.create-advance-salary', compact('employees', 'employeeSalaries'));
    }

    public function store(Request $request)
    {
        $date = explode(' ', Carbon::parse($request['periode'])->isoFormat('MMMM Y'));
        $bulan = $date[0];
        $tahun = $date[1];
        $gajiBersih = $request['gaji_bersih'];
        $totalGaji = $gajiBersih;

        foreach ($request['kt_docs_repeater_advanced'] as $value) {
            $value['id_gaji'] = $request['id_gaji'];
            $value['bulan'] = $bulan;
            $value['tahun'] = $tahun;
            $jumlah = $value['jumlah'];

            if ($value['kategori'] == 'bonus') {
                $totalGaji = $totalGaji + $jumlah;
            } elseif ($value['kategori'] == 'potongan') {
                $totalGaji = $totalGaji - $jumlah;
            }

            $value['total_gaji'] = $totalGaji;

            $validatedData = Validator::make($value, [
                'id_gaji' => 'required|integer',
                'bulan' => 'required',
                'tahun' => 'required',
                'kategori' => 'required|string|min:3',
                'keterangan' => 'required|string|min:3',
                'jumlah' => 'required',
                'total_gaji' => 'required'
            ]);
            // return response()->json($date);
            if ($validatedData->fails()) {
                Alert::error('Error Title', 'Data Salary Advance Tidak Valid');
                return redirect()->back();
            }

            SalaryAdvance::create($value);
        }

        toast('Detail Gaji Karyawan created successfully', 'success');
        return redirect()->route('salary-advance.index');
    }

    public function edit(string $id)
    {
        $salary_advance = SalaryAdvance::find($id);
        $employees = Employee::orderBy('nama_lengkap', 'DESC')->get();
        return view('payroll.edit-advance-salary', compact('salary_advance', 'employees'));
    }

    public function update(Request $request, SalaryAdvance $salary_advance)
    {
        $validatedData = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|min:3',
            'periode' => 'required',
            'kategori' => 'required|string|min:3',
            'keterangan' => 'required|string|min:3',
            'jumlah' => 'required'
        ]);

        if($validatedData->fails()){
            Alert::error('Error Title', 'Data Salary Advance Tidak Valid');
            return redirect()->back();
        }
        $salary_advance->update($request->all());

        toast('Detail Gaji Karyawan updated successfully', 'success');
        return redirect()->route('salary-advance.index');
    }

    public function destroy(string $id)
    {
        $advance = SalaryAdvance::find($id);
        $advance->delete();

        toast('Berhasil Menghapus Data', 'success');
        return redirect()->route('salary-advance.index');
    }
}