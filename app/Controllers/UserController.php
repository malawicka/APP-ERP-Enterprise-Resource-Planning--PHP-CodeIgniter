<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function login()
    {

        $rules = [
            'username' => 'required|min_length[6]|max_length[50]',
            'password' => 'required|min_length[8]|max_length[255]|validateUser[username,password]',
        ];

        $errors = [
            'password' => [
                'validateUser' => "Username atau Password tidak sesuai",
            ],
        ];

        if (!$this->validate($rules, $errors)) {

            return view('auth/form_login', [
                "validation" => $this->validator,
            ]);
        } else {
            $model = new UserModel();

            $user = $model->where('username', $this->request->getVar('username'))
                ->first();

            $this->setUserSession($user);

            if ($user['id_level'] == "1") {

                return redirect()->to(base_url('administrator'));
            } elseif ($user['id_level'] == "2") {

                return redirect()->to(base_url('pimpinan'));
            } elseif ($user['id_level'] == "3") {

                return redirect()->to(base_url('gudang'));
            } elseif ($user['id_level'] == "4") {

                return redirect()->to(base_url('pembelian'));
            } elseif ($user['id_level'] == "5") {

                return redirect()->to(base_url('penjualan'));
            } elseif ($user['id_level'] == "6") {

                return redirect()->to(base_url('kasir'));
            } elseif ($user['id_level'] == "7") {

                return redirect()->to(base_url('pelanggan'));
            }
        }

        return view('auth/form_login');
    }

    private function setUserSession($user)
    {


        $data = [
            'id_user' => $user['id_user'],
            'nama_lengkap' => $user['nama_lengkap'],
            'isLoggedIn' => true,
            "id_level" => $user['id_level'],
            "foto_user" => $user['foto_user'],
            "status_aktif" => $user['status_aktif'],
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
