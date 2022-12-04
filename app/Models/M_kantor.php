<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kantor extends Model
{
    public function get_all_data()
    {
        return $this->db->table('tbl_kantor')->get()->getResultArray();
    }

    public function insert_data($data){
       return $this->db->table('tbl_kantor')->insert($data); 
    }

    public function detail($id){
        return $this->db->table('tbl_kantor')->where('id', $id)->get()->getRowArray();
    }

    public function update_kantor($data, $id){
        return $this->db->table('tbl_kantor')->update($data, array('id' => $id));
    }

    public function delete_kantor($id){
        return $this->db->table('tbl_kantor')->delete(array('id' => $id));
    }
}
