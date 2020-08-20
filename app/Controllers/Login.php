<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('auth/user-log');
    }
    public function login_action()
    {
        $usermodel = new userModel();

        $no_kk = $this->request->getPost('no_kk');
        $no_nik = $this->request->getPost('no_nik');

        $cek = $usermodel->get_data($no_kk, $no_nik);

        if (($cek['no_kk'] == $no_kk) && ($cek['no_nik'] == $no_nik)) {
            session()->set('id', $cek['id']);
            session()->set('no_kk', $cek['no_kk']);
            session()->set('no_nik', $cek['no_nik']);
            return view('pages/user');
        } else {
            return redirect()->to('login/index');
        }
    }
}
