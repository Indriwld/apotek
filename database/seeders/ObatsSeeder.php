<?php

namespace Database\Seeders;

use App\Models\Obat;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class ObatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier1 = Supplier::create(['nama' => 'Aam Amirudin']);

//membuat sample buku
        $obat1 = Obat::create(['jenis_obat' => 'sirup',
            'nama_obat' => 'insana', 'stok' => 200, 'id_supplier' => $supplier1->id]);

    }
}
