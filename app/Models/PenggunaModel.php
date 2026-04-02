<?php

namespace App\Models;

use CodeIgniter\Model;


class PenggunaModel extends Model
{
    protected $table            = 'tblusers';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_lengkap', 'username', 'password', 'id_level',  'foto_user', 'status_aktif'];


    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = 'deleted_at';

   function dataLevel()
   {
    return $this->db->table('tbllevels')
    ->orderBy('id_level','ASC')
    ->get()->getResultArray();
   }
}
