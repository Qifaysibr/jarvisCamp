<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = "Tugas";

    protected $fillable = ['Mata Kuliah', 'Kelas', 'Jadwal', 'Pengajar', 'No HP Pengajar'];
}
