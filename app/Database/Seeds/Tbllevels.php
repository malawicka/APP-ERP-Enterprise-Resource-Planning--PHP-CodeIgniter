<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Tbllevels extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nm_level'  => 'Administrator',

               
            ],
            [
                'nm_level'  => 'Pimpinan',
                
            ],
            [
                'nm_level'  => 'Gudang',
                
            ],
            [
                'nm_level'  => 'Pembelian',
                
            ],
            [
                'nm_level'  => 'Penjualan',
                
            ],
            [
                'nm_level'  => 'kasir',
                
            ],
            [
                'nm_level'  => 'Pelanggan',
                
            ],
        ];
        $this->db->table('tbllevels')->insertBatch($data);
    }
}
