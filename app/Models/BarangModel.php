<?php

namespace App\Models;

use CodeIgniter\Model;


class BarangModel extends Model
{
    protected $table            = 'tblbarang';
    protected $primaryKey       = 'kd_barang';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kd_barang','nm_barang', 'satuan', 'hrg_beli', 'hrg_jual', 'stokawal', 'terjual','sisastok'];


  // Dates
  protected $useTimestamps = false;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';
   
}
