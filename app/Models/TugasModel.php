<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasModel extends Model
{
    use HasFactory;
    protected $table        = "task";
    protected $primaryKey   = "id";
    protected $fillable     = ['id','nama_tugas','tanggal','aktivitas'];
}
