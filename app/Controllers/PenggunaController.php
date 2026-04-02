<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class PenggunaController extends BaseController
{
    protected $PenggunaModel;

    public function __construct()
    {
        $this->PenggunaModel = new PenggunaModel();
    }

    public function index()
    {
        if (session()->get('isLoggedIn') == true && session()->get('id_level') == "1") {
            $datauser = $this->PenggunaModel->join('tbllevels', 'tbllevels.id_level=tblusers.id_level')
                ->orderBy('nama_lengkap', 'ASC')->findAll();
        
            $data = [
                'title' => 'Data Pengguna',
                'tampildata' => $datauser,
            ];
        
            return view('admin/datapengguna/v_data', $data);
        } else {
            return redirect()->route('logout');
        }
    }
    public function hapus($iduser)
    {
       
        $datauser = new PenggunaModel();
        
       
        $datauser->delete($iduser);
    
        return redirect()->route('administrator/datapengguna');
    }
    
    public function tambah()
    {
        $datauser = new PenggunaModel();
        $data = [
            'title' => 'Tambah Data Pengguna',
            'level' => $datauser->datalevel()
        ];
        return view('admin/datapengguna/v_tambah', $data);
    }
    public function simpandata()
    {
        $simpandata = [
            'nama_lengkap' => $this->request->getVar('xnamalengkap'),
            'username'     => $this->request->getVar('xusername'),
            'password'     => password_hash($this->request->getVar('xpassword'), PASSWORD_BCRYPT),
            'id_level'     => $this->request->getVar('xlevel'),
            'status_aktif' => $this->request->getVar('xstatus'),
        ];
    
        $datauser = new PenggunaModel();
        $datauser->insert($simpandata);
    
        return redirect()->to(base_url('administrator/datapengguna'));
    }

     public function edit($iduser)
    {
       
        $datauser = new PenggunaModel();
        
       
       $row = $datauser->find($iduser);
       $data=[
        'title'=> 'Ubah Data Pengguna',
        'id_user' => $row['id_user'],
        'nama_lengkap'=> $row['nama_lengkap'],
        'username'=> $row['username'],
        'id_level'=> $row['id_level'],
        'status_aktif'=> $row['status_aktif'],
        'level' => $datauser->datalevel(),

       ];
       return view ('admin/datapengguna/v_edit', $data);
    

    }
    public function updatedata()
    {
        $id = $this->request->getVar('xiduser'); 
    
        $simpandata = [
            'nama_lengkap' => $this->request->getVar('xnamalengkap'),
            'username'     => $this->request->getVar('xusername'),
            'id_level'     => $this->request->getVar('xlevel'),
            'status_aktif' => $this->request->getVar('xstatus'),
        ];
    
        $datauser = new PenggunaModel();
        $datauser->update($id, $simpandata); 
    
        return redirect()->to(base_url('administrator/datapengguna'));
    }
    public function uploadfoto($iduser)
    {
       
        $datauser = new PenggunaModel();
        
       
       $row = $datauser->find($iduser);
       $data=[
        'title'=> 'Upload Foto Pengguna',
        'id_user' => $row['id_user'],
       

       ];
       return view ('admin/datapengguna/v_uploadfoto', $data);
    

    }
    public function simpanfoto($iduser)
    {
        $id = $this->request->getFile('xfoto'); 
        $datauser = new PenggunaModel();
        $row = $datauser->find($id);
        $foto = $row['foto_user'];
        
        if ($foto != NULL || $foto != "") {
            unlink(FCPATH . 'assets/dist/img/' . $foto);
    
            $filefoto = $this->request->getFile('xfoto');
            $filefoto->move(FCPATH . '/assets/dist/img/', 'foto-user-' . $id . '.' . $filefoto->getExtension());
    
            $simpanfoto = [
                'foto_user' => '/assets/dist/img/' . $filefoto->getName(),
            ];
    
            $datauser->update($id, $simpanfoto);
    
            return redirect()->to(base_url('administrator/pengguna/'));
        }
    }
}    