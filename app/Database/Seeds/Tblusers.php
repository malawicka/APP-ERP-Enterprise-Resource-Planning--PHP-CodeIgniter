<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Tblusers extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_lengkap'  => 'Malawika',
                'username'      => 'administrator',
                'password'      => password_hash('12345678', PASSWORD_BCRYPT),
                'id_level'      => '1',
                'foto_user'     => '',
                'status_aktif'  => 'Y'
            ],
            [
                'nama_lengkap'  => 'Zoro',
                'username'      => 'roronoazoro1',
                'password'      => password_hash('12345678', PASSWORD_BCRYPT),
                'id_level'      => '2',
                'foto_user'     => '',
                'status_aktif'  => 'Y'
            ],
        ];
        $this->db->table('tblusers')->insertBatch($data);
    }
}
