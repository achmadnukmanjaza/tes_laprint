<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuti extends Model{
    protected $table = 'cuti';
    protected $guarded = [];
    protected $fillable = ['nomor_induk','t_cuti','lama_cuti','keterangan','created_at','updated_at'];
}