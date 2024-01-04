<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    public $timesstamps = true;
    protected $fillable = [
        'code_transaksi',
        'sku_transaksi',
        'total_jml',
        'total_harga',
        'nama_customer',
        'alamat',
        'no_tlp',
        'jasa',
    ];
    protected $hidden;
}