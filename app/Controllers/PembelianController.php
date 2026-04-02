<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PembelianModel;
use App\Models\SupplierModel;

class PembelianController extends BaseController
{
    protected $PembelianModel;

    public function __construct()
    {
        $this->PembelianModel = new PembelianModel();
    }

    public function index()
    {
        if (session()->get('isLoggedIn') == true && session()->get('id_level') == "1") {
            $datapem = $this->PembelianModel
                ->orderBy('tgl_beli', 'ASC')->findAll();
        
            $data = [
                'title' => 'Data Pembelian',
                'tampildata' => $datapem,
            ];
        
            return view('admin/datapembelian/v_data', $data);
        } else {
            return redirect()->route('logout');
        }
    }
    public function hapus($idbeli)
    {
       
        $datapem = new PembelianModel();
        
       
        $datapem->delete($idbeli);
    
        return redirect()->route('administrator/datapembelian');
    }
    
    public function tambah()
    {
        $datapem = new PembelianModel();
        $data = [
            'title' => 'Tambah Data Pembelian',
          
        ];
        return view('admin/datapembelian/v_tambah', $data);
    }
    public function simpandata()
    {
     
        $simpandata = [
            'tgl_beli' => $this->request->getVar('xtglbeli'),
            'id_supplier'     => $this->request->getVar('xidsupplier'),
            'no_faktur'     => $this->request->getVar('xnofaktur'),
            'kd_barang'     => $this->request->getVar('xkdbarang'),
            'hrg_beli' => $this->request->getVar('xhrgbeli'),
            'jlh_beli' => $this->request->getVar('xjlhbeli'),
        ];
    
        $datapem = new PembelianModel();
        $datapem->insert($simpandata);
    
        return redirect()->to(base_url('administrator/datapembelian'));
    }

     public function edit($idbeli)
    {
       
        $datapem = new PembelianModel();
        
       
       $row = $datapem->find($idbeli);
       $data=[
        'title'=> 'Ubah Data Pembelian',
        'id_beli' => $row['id_beli'],
        'tgl_beli'=> $row['tgl_beli'],
        'id_supplier'=> $row['id_supplier'],
        'no_faktur'=> $row['no_faktur'],
        'kd_barang'=> $row['kd_barang'],
        'hrg_beli'=> $row['hrg_beli'],
        'jlh_beli'=> $row['jlh_beli'],
      

       ];
       return view('admin/datapembelian/v_edit', $data);
    

    }
    public function updatedata()
    {
        $id = $this->request->getVar('xidbeli'); 
    
        $simpandata = [
            'tgl_beli'      => $this->request->getVar('xtglbeli'),
            'id_supplier'   => $this->request->getVar('xidsupplier'),
            'no_faktur'     => $this->request->getVar('xnofaktur'),
            'kd_barang'     => $this->request->getVar('xkdbarang'),
            'hrg_beli'      => $this->request->getVar('xhrgbeli'),
            'jlh_beli'      => $this->request->getVar('xjlhbeli'),
            
        ];
    
      
        $datapem = new PembelianModel();
        $datapem->where('id_beli', $id)->set($simpandata)->update();
        
    
        return redirect()->to(base_url('administrator/datapembelian'));
    }
    
}    