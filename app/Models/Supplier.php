<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $visible = ['nama'];
    protected $fillable = ['nama'];
    public $timestamps = true;
    public function obats()
    {
        return $this->hasMany('App\Models\Obat', 'id_supplier');
    }
}
