<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        if (session()->get('isLoggedIn') == true && session()->get('id_level') == "1") {
            $data = [
                'title' => 'Administrator'
            ];

            return view('admin/v_admin', $data);
        } else {
            return redirect()->route('logout');
        }
    }
}
