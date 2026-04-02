<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;


class BarangController extends BaseController
{
    protected $BarangModel;

    public function __construct()
    {
        $this->BarangModel = new BarangModel();
    }

    public function index()
    {
        if (session()->get('isLoggedIn') == true && session()->get('id_level') == "1") {
            $databar = $this->BarangModel
                ->orderBy('kd_barang', 'ASC')->findAll();
        
            $data = [
                'title' => 'Data Barang',
                'tampildata' => $databar,
            ];
        
            return view('admin/databarang/v_data', $data);
        } else {
            return redirect()->route('logout');
        }
    }
    public function hapus($kdbarang)
    {
       
        $databar = new BarangModel();
        
       
        $databar->delete($kdbarang);
    
        return redirect()->route('administrator/databarang');
    }
    
    public function tambah()
    {
        $databar = new BarangModel();
        $data = [
            'title' => 'Tambah Data Barang',
       
        ];
        return view('admin/databarang/v_tambah', $data);
    }
    public function simpandata()
    {
        $simpandata = [
            'kd_barang' => $this->request->getVar('xkodebarang'),
            'nm_barang' => $this->request->getVar('xnamabarang'),
            'satuan'     => $this->request->getVar('xsatuan'),
            'hrg_beli'     => $this->request->getVar('xhrgbeli'),
            'hrg_jual'     => $this->request->getVar('xhrgjual'),
            'stokawal'     => $this->request->getVar('xstokawal'),
            'terjual'     => $this->request->getVar('xterjual'),
            'sisastok'     => $this->request->getVar('xsisastok'),
        ];
    
        $databar = new BarangModel();
        $databar->insert($simpandata);
    
        return redirect()->to(base_url('administrator/databarang'));
    }

     public function edit($kdbarang)
    {
       
        $databar = new BarangModel();
        
       
       $row = $databar->find($kdbarang);
       $data=[
        'title'=> 'Ubah Data Barang',
        'kd_barang' => $row['kd_barang'],
        'nm_barang'=> $row['nm_barang'],
        'satuan'=> $row['satuan'],
        'hrg_beli'=> $row['hrg_beli'],
        'hrg_jual'=> $row['hrg_jual'],
        'stokawal'=> $row['stokawal'],
        'terjual'=> $row['terjual'],
        'sisastok'=> $row['sisastok'],
        

       ];
       return view ('admin/databarang/v_edit', $data);
    

    }
    public function updatedata()
    {
        $id = $this->request->getVar('xkodebarang'); 
    
        $simpandata = [
            'kd_barang' => $this->request->getVar('xkodebarang'),
            'nm_barang' => $this->request->getVar('xnamabarang'),
            'satuan'     => $this->request->getVar('xsatuan'),
            'hrg_beli'     => $this->request->getVar('xhrgbeli'),
            'hrg_jual'     => $this->request->getVar('xhrgjual'),
            'stokawal'     => $this->request->getVar('xstokawal'),
            'terjual'     => $this->request->getVar('xterjual'),
            'sisastok'     => $this->request->getVar('xsisastok'),
        ];
    
        $databar = new BarangModel();
        $databar->update($id, $simpandata); 
    
        return redirect()->to(base_url('administrator/databarang'));
    }
   
}
       
    
 