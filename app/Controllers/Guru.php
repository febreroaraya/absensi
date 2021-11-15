<?php

namespace App\Controllers;

class Guru extends BaseController
{
    public function index()
    {
        
        $builder = $this->db->table('tb_user');
        $query   = $builder->get()->getResult();
        $data['tb_user'] = $query;
        return view('guru/get', $data);
        // print_r($query);
    }
    public function create()
    {
        return view('guru/add');
    }
    public function store()
    {
        $data = $this->request->getPost();
        $this->db->table('tb_user')->insert($data);
        if($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('guru'))->with('success', 'Data Berhasil Disimpan');
        }
    }
    public function edit($id = null)
    {
        if($id != null) {
            $query = $this->db->table('tb_user')->getWhere(['id' => $id]);
            if($query->resultID->num_rows > 0) {
                $data['guru'] = $query->getRow();
                return view('guru/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function update($id)
    {
        $data = $this->request->getPost();
        unset($data['_method']);
        $this->db->table('tb_user')->where(['id' => $id])->update($data);
        return redirect()->to(site_url('guru'))->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($id)
    {
        $this->db->table('tb_user')->where(['id' => $id])->delete();
        return redirect()->to(site_url('guru'))->with('success', 'Data Berhasil Dihapus');
    }
}
