<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    protected $session, $ProductModel;

    private $products = [
        [
            "id" => "623b476dc4f96",
            "name" => "Odol",
            "category" => "utilities",
            "stock" => 200,
            "price" => 5000
        ]
    ];
    
    public function __construct()
    {
        helper('form');

        $this->ProductModel = new ProductModel();

        // echo 'tesss';

        $this->session = \Config\Services::session();
        $this->session->start();

        if (!$this->session->get('products')) {
            $this->session->set('products', $this->products);
        }
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $payload = [
            "products" => $this->session->get('products')
        ];

        echo view('product/index', $payload);
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
        echo view('product/new');
    }


    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */

    public function about()
    {
        $payload = [
            "products" => $this->session->get('products')
        ];
        echo view('product/about', $payload);
    }


    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function admin($id = null)
    {
        if ($id != null) {
            $id = $this->ProductModel->getResepById($id);
        }
        $data = [
            'data' => $this->ProductModel->getAll(),
            'resep'  => $id
        ];
        echo view('product/admin', $data);
    }


    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {

        $products = $this->session->get('products');

        $payload = [
            "id" => uniqid(),
            "name" => $this->request->getPost('name'),
            "stock" => (int) $this->request->getPost('stock'),
            "price" => (int) $this->request->getPost('price'),
            "category" => $this->request->getPost('category'),
        ];

        array_push($products, $payload);

        $this->session->set('products', $products);
        return redirect()->to('/product');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit()
    {
        $id_resep = $this->request->getPost('id_resep');
        $nama_resep = $this->request->getPost('nama_resep');
        $kategori = $this->request->getPost('kategori');
        $waktu = $this->request->getPost('waktu');
        $bahan = $this->request->getPost('bahan');
        $langkah = $this->request->getPost('langkah');
        $photo = $this->request->getPost("photo" );

        $data = [
            'id_resep' => $id_resep,
            'nama_resep' => $nama_resep,
            'kategori' => $kategori,
            'waktu' => $waktu,
            'bahan' => $bahan,
            'langkah' => $langkah,
        ];
        // echo $id_resep;
        $this->ProductModel->edit($data);
        return redirect()->to('/product/admin');
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $products = $this->session->get('products');
        $data = null;

        $_new_products = [];

        foreach ($products as $item) {
            if ($item['id'] == $id) {

                $item['name'] = $this->request->getPost('name');
                $item['category'] = $this->request->getPost('category');
                $item['stock'] = (int) $this->request->getPost('stock');
                $item['price'] = (int) $this->request->getPost('price');

                $data = $item;
            }

            array_push($_new_products, $item);
        }

        if (!$data) {
            throw new \Exception("Data not found!");
        }

        $this->session->set('products', $_new_products);
        return redirect()->to('/product');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $data = [
            'id_resep' => $id
        ];

        $this->ProductModel->delData($data);
        return redirect()->to('/product/admin');
    }

    public function insert()
    {
        $nama_resep = $this->request->getPost('nama_resep');
        $kategori = $this->request->getPost('kategori');
        $waktu = $this->request->getPost('waktu');
        $bahan = $this->request->getPost('bahan');
        $langkah = $this->request->getPost('langkah');

        // echo $nama_resep;
        $data = [
            'nama_resep' => $nama_resep,
            'kategori' => $kategori,
            'waktu' => $waktu,
            'bahan' => $bahan,
            'langkah' => $langkah,
        ];

        $this->ProductModel->add($data);
        return redirect()->to('/product/admin');
    }
}
