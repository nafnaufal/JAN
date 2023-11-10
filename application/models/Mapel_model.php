<?php

class Mapel_model extends CI_model {

    public function get_all_mapel() {
        $this->load->database();
        $query = $this->db->get('mapel');
        $mapel = $query->result();

        return $mapel;
    }

    public function delete_data()
    {
        $id = $_GET['id'];
        // $hp = $_POST['hp'];
        // $anak = $_POST['anak'];
        // $tanggal_lahir = $_POST['tanggal_lahir'];

        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('mapel');
    }
    public function save_data()
    {
        $mapel = $_POST['nama'];

        $this->load->database();
        $this->db->
        insert('mapel', array(
            'nama_mapel' => $mapel
        ));
    }
    
    public function update_data()
    {
        $id = $_GET['id'];
        $mapel = $_POST['nama'];

        $this->load->database();
        $this->db->replace('mapel', array(
            'id' => $id,
            'nama_mapel' => $mapel
        ));
    }
    public function get_mapel()
    {
        $id = $_GET['id'];
        $this->load->database();
        $this->db->where('id', $id);
        $query = $this->db->get('mapel');
        $data = $query->result()[0];

        return $data;
    }
}
