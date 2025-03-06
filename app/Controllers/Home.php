<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function list()
    {
        $data = [
            'users' => (new UserModel())->findAll()
        ];
        return view('list',$data);
    }
    
    public function tambah()
    {
        return view('tambah');
    }

    public function pressTambah()
    {
        $users = new UserModel();

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');

        $users->insert([
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        ]);

        return redirect()->to('/list');
    }

    public function delete($id)
    {
        $users = new UserModel();
        $users->delete($id);
        return redirect()->to('/list');
    }

    public function ubah($id)
    {
        $users = new UserModel();
        $data = [
            'user' => $users->find($id)
        ];
        return view('ubah',$data);
    }

    public function pressUbah()
    {
        $users = new UserModel();

        $id = $this->request->getPost('id');
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');

        $users->update($id, [
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        ]);

        return redirect()->to('/list');
    }
}
