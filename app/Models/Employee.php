<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table="employee";
    

    protected $fillable = [
        'pc',
        'trxref_id',
        'tgl_trx',
        'produk',
        'qty',
        'no_tujuan',
        'kode_res',
        'res',
        'modul',
        'status',
        'tgl_status',
        'nama_supp',
        'hb_stock',
        'h_beli',
        'h_jual',
        'komisi',
        'laba',
        'poin',
        'reply_provide',
        'sn',
        'ref_id',
        'rate_tp',
        'rate',
        'shell',
        'hb_fix',
        'notes',
        'k_provider',
        'provider',
        'k_produk'
    ];

    protected $casts = [
        'doj' => 'datetime:Y-m-d',
    ];
}
