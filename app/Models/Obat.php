<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $visible = ['id_supplier', 'jenis_obat', 'nama_obat', 'stok'];
    protected $fillable = ['id_supplier', 'jenis_obat', 'nama_obat', 'stok'];
    public $timestamps = true;

    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier', 'id_supplier');
    }
    public function transaksi()
    {
        return $this->hasMany('App\Models\trasnsaksi', 'id_obat');
    }
}
