<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RplModel extends Model
{
    use HasFactory;

    protected $table = 'tb_rpl';
    protected $primaryKey = 'id_siswa';
    protected $fillable = ['Nama_Siswa', 'Kelas', 'Jenis_Kelamin', 'Umur'];
}
