<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model{
    protected $table = 'karyawan';
    protected $primaryKey = 'no';
    protected $guarded = [];
    protected $fillable = ['no','nomor_induk','nama','alamat','t_lahir','t_bergabung','t_cuti','lama_cuti','keterangan','created_at','updated_at'];
}