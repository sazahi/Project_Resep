<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;

class Login extends ResourceController
{
    protected $session, $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->session = \Config\Services::session();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        echo view('product/about');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function proses_log()
    {
        // validasi
        $validasi = [
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
        ];

        // jika valid
        if ($this->validate($validasi)) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // cek username dan password
            $cek = $this->userModel->cekData($username, $password);

            // jika data ditemukan
            if ($cek) {
                session()->set('id', $cek['a_id']);
                session()->set('username', $cek['username']);
                session()->set('log', true);
                return redirect()->to(base_url('product/admin'));
            } else {
                session()->setFlashdata('pesan', "Username atau Password Salah!");
                return redirect()->to(base_url('product/new'));
            }
        } else {
            // jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('product/new'))->withInput();
        }
    }

    public function logout()
    {
        session()->remove('id');
        session()->remove('username');
        session()->remove('log');
        return redirect()->to(base_url('product/about'));
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
