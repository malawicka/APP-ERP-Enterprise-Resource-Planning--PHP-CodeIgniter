<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SupplierModel;

class SupplierController extends BaseController
{
    protected $SupplierModel;

    public function __construct()
    {
        $this->SupplierModel = new SupplierModel();
    }

    public function index()
    {
        if (session()->get('isLoggedIn') == true && session()->get('id_level') == "1") {
            $datasup = $this->SupplierModel
                ->orderBy('nm_supplier', 'ASC')->findAll();
        
            $data = [
                'title' => 'Data Supplier',
                'tampildata' => $datasup,
            ];
        
            return view('admin/datasupplier/v_data', $data);
        } else {
            return redirect()->route('logout');
        }
    }
    public function hapus($idsupplier)
    {
       
        $datasup = new SupplierModel();
        
       
        $datasup->delete($idsupplier);
    
        return redirect()->route('administrator/datasupplier');
    }
    
    public function tambah()
    {
        $datasup = new SupplierModel();
        $data = [
            'title' => 'Tambah Data Supplier',
            
        ];
        return view('admin/datasupplier/v_tambah', $data);
    }
    public function simpandata()
    {
        $simpandata = [
            'nm_supplier' => $this->request->getVar('xnamasupplier'),
            'alamat'     => $this->request->getVar('xalamat'),
            'no_telp'     => $this->request->getVar('xnotelp'),
            'nm_kontak'     => $this->request->getVar('xkontak'),
            
        ];
    
        $datasup = new SupplierModel();
        $datasup->insert($simpandata);
    
        return redirect()->to(base_url('administrator/datasupplier'));
    }

     public function edit($idsupplier)
    {
       
        $datasup = new SupplierModel();
        
       
       $row = $datasup->find($idsupplier);
       $data=[
        'title'=> 'Ubah Data Supplier',
        'id_supplier' => $row['id_supplier'],
        'nm_supplier'=> $row['nm_supplier'],
        'alamat'=> $row['alamat'],
        'no_telp'=> $row['no_telp'],
        'nm_kontak'=> $row['nm_kontak'],
        
       ];
       return view ('admin/datasupplier/v_edit', $data);
    

    }
    public function updatedata()
    {
        $id = $this->request->getVar('xidsupplier'); 
    
        $simpandata = [
            'nm_supplier' => $this->request->getVar('xnamasupplier'),
            'alamat'     => $this->request->getVar('xalamat'),
            'no_telp'     => $this->request->getVar('xnotelp'),
            'nm_kontak' => $this->request->getVar('xkontak'),
        ];
    
        $datasup = new SupplierModel();
        $datasup->update($id, $simpandata); 
    
        return redirect()->to(base_url('administrator/datasupplier'));
    }
   
}    