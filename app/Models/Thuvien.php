<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thuvien extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_sach',
        'ISBN',
        'tac_gia',
        'the_loai',
        'so_trang',
        'nam_xb',
    ];
}
