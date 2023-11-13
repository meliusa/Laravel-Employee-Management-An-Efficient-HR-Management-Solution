<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosition extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'nama_posisi'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'id_posisi', 'id');
    }
}
