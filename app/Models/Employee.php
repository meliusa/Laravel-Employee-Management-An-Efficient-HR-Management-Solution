<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'nama_lengkap',
        'email',
        'tempat_lahir',
        'tanggal_lahir',
        'id_posisi',
        'no_hp',
        'alamat_ktp',
        'tempat_tinggal',
        'agama',
        'jenis_kelamin',
        'status_pernikahan',
        'golongan_darah',
        'kewarganegaraan',
        'nik',
        'foto_karyawan',
        'foto_ktp',
        'id_pekerjaan',
        'bank',
        'nomor_rekening'
    ];

    protected $hidden = [];

    public function job_position()
    {
        return $this->belongsTo(JobPosition::class, 'id_posisi', 'id');
    }

    public function job_type()
    {
        return $this->belongsTo(JobType::class, 'id_pekerjaan', 'id');
    }

    public function family()
    {
        return $this->hasOne(Family::class, 'id_karyawan', 'id');
    }

    public function employment_histories()
    {
        return $this->hasMany(EmploymentHistory::class, 'id_karyawan', 'id');
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class, 'id_karyawan', 'id');
    }

    public function employee_contract()
    {
        return $this->hasOne(EmployeeContract::class, 'id_karyawan', 'id');
    }
}
