<?php

class Mapel_model extends CI_model {

    public function get_all_mapel() {
        $this->load->database();
        $query = $this->db->get('mapel');
        $mapel = $query->result();

        return $mapel;
    }

    public function save() {
        $nama = $this->input->post('nama');
        $this->load->database();
        $this->db->insert('mapel', array(
            'nama_mapel' => $nama,
        ));
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
}
