<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class FamilyController extends Controller
{
    public function store(Request $request)
    {
        $employee = Employee::latest()->first();
        $request['rt/rw'] = "{$request->rt}/{$request->rw}";
        $request['id_karyawan'] = $employee->id;

        $validatedData = Validator::make($request->all(), [
            'id_karyawan' => 'required|string',
            'no_kk' =>  'required|numeric|unique:families,no_kk',
            'kepala_keluarga'   =>  'required|string',
            'alamat'    =>  'required|string',
            'rt/rw' =>  'required|string',
            'desa/kelurahan'    =>  'required|string',
            'kecamatan' =>  'required|string',
            'kabupaten/kota'    =>  'required|string',
            'kode_pos'  =>  'required|numeric|min:5',
            'provinsi'  =>  'required|string',
            'foto_kk'   =>  'required'
        ]);

        if ($validatedData->fails()) {
            $path = 'public/uploads/karyawan/kartukeluarga' . $request['foto_kk'];
            if (file_exists($path)) {
                unlink($path);
            }
            $employee->delete();
            Alert::error('Error Title', 'Data Keluarga Tidak Valid');
            return redirect()->back();
        }

        Family::create($request->all());

        $familyDetail = new FamilyDetailController;
        return $familyDetail->store($request);
    }

    public function show(Family $family)
    {
        $fullPath = Storage::disk('public')->path('uploads/karyawan/kartukeluarga/' . $family->foto_kk);
        $filesize = filesize($fullPath);

        return response()->json([
            'data' => $family,
            'size' => $filesize
        ]);
    }

    public function edit(Family $family)
    {
        $rtrw = explode('/', $family["rt/rw"]);
        $rt = $rtrw[0];
        $rw = $rtrw[1];
        return view('profile.edit-data-keluarga', compact('family', 'rt', 'rw'));
    }

    public function update(Request $request, Family $family)
    {
        $request['rt/rw'] = "{$request->rt}/{$request->rw}";

        $validatedData = Validator::make($request->all(), [
            $request['no_kk'] == $family->no_kk ? "'no_kk' =>  'required|numeric|unique:families,no_kk'" : '',
            'kepala_keluarga'   =>  'required|string',
            'alamat'    =>  'required|string',
            'rt/rw' =>  'required|string',
            'desa/kelurahan'    =>  'required|string',
            'kecamatan' =>  'required|string',
            'kabupaten/kota'    =>  'required|string',
            'kode_pos'  =>  'required|numeric|min:5',
            'provinsi'  =>  'required|string',
            'foto_kk'   =>  'required'
        ]);

        if ($validatedData->fails()) {
            if ($request['foto_kk'] != $family->foto_kk) {
                $fullPath = Storage::disk('public')->path('uploads/karyawan/kartukeluarga/' . $request['foto_kk']);
                unlink($fullPath);
            }

            Alert::error('Error Title', 'Data Keluarga Tidak Valid');
            return redirect()->back();
        }

        if ($request['foto_kk'] != $family->foto_kk) {
            $fullPath = Storage::disk('public')->path('uploads/karyawan/kartukeluarga/' . $family->foto_kk);
            unlink($fullPath);
        }

        $family->update($request->all());

        toast('Sertifikat updated successfully', 'success');
        return redirect()->route('profile.family', ['id' => $family->employee->id]);
    }

    public function uploadkk(Request $request)
    {
        $filename = $request->file('file')->getClientOriginalName();
        $name = trim($filename);

        $request->file('file')->storeAs('public/uploads/karyawan/kartukeluarga', $name);

        return response()->json([
            'name'  => $name,
            'original_name' => $filename
        ]);
    }
}
