<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $visible = ['nama_siswa', 'kelas', 'tgl', 'hadir', 'izin', 'sakit'];

    protected $fillable = ['nama_siswa', 'kelas', 'tgl', 'hadir', 'izin', 'sakit'];

    public $timestamps = true;
}
