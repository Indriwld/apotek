<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $visible = ['id_user', 'id_obat', 'jumlah_beli', 'harga', 'total'];
    protected $fillable = ['id_user', 'id_obat', 'jumlah_beli', 'harga', 'total'];
    public $timestamps = true;

    public function obat()
    {
        return $this->belongsTo('App\Models\Obat', 'id_obat');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}
