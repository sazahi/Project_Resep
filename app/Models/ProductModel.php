<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'dataresep';
    protected $primaryKey       = 'id_resep';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_resep', 'kategori', 'waktu', 'bahan', 'langkah', 'photo'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function searchByName($name)
    {
        // Perform the search query based on the provided name
        return $this->like('nama_resep', $name)->findAll();
    }

    public function getAll()
    {
        return $this->db->table('dataresep')->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('dataresep')->insert($data);
    }

    public function delData($data)
    {
        $this->db->table('dataresep')->where('id_resep', $data['id_resep'])->delete($data);
    }

    public function getResepById($id)
    {
        return $this->db->table('dataresep')->where('id_resep', $id)->get()->getRowArray();
    }

    public function edit($data)
    {
        $this->db->table('dataresep')->where('id_resep', $data['id_resep'])->update($data);
    }
}
