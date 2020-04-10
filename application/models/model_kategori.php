<?php

class Model_kategori extends CI_Model
{
    public function data_elektronik()
    {
        return $this->db->get_where("tb_brg", array('kategori' => 'Elektronik'));
    }

    public function data_handphone()
    {
        return $this->db->get_where("tb_brg", array('kategori' => 'handphone'));
    }

    public function data_permainan()
    {
        return $this->db->get_where("tb_brg", array('kategori' => 'permainan'));
    }

    public function data_aksesoris()
    {
        return $this->db->get_where("tb_brg", array('kategori' => 'aksesoris'));
    }
}
