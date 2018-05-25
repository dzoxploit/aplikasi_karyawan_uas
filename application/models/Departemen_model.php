<?php
class Departemen_model extends CI_model{
    // table name
    private $tbl_dept= 'tbl_dept';
 
    public function Departemen(){
        parent::Model();
    }
    // get number of persons in database
    public function count_all(){
        return $this->db->count_all($this->tbl_dept);
    }
    // get persons with paging
    public function get_paged_list($limit = 10, $offset = 0){
        $this->db->order_by('dept_id');
        return $this->db->get($this->tbl_dept, $limit, $offset);
    }
    public function view_by($id){
    $this->db->where('dept_id', $id);
    return $this->db->get('tbl_dept')->row();
  }
    // get person by id
    public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
    
    $this->form_validation->set_rules('description', 'description', 'required|max_length[50]');
    $this->form_validation->set_rules('headofdept', 'headofdept', 'required');
    $this->form_validation->set_rules('ruangan', 'ruangan', 'required|numeric|max_length[50]');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array(
      "description" => $this->input->post('description'),
      "headofdept" => $this->input->post('headofdept'),
      "ruangan" => $this->input->post('ruangan'),
    );
    
    $this->db->insert('tbl_dept', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  public function update($id){
    $data = array(
      "description" => $this->input->post('description'),
      "headofdept" => $this->input->post('headofdept'),
      "ruangan" => $this->input->post('ruangan'),
    );
    
    $this->db->where('dept_id', $id);
    $this->db->update('tbl_dept', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($id){
    $this->db->where('dept_id', $id);
    $this->db->delete('tbl_dept'); // Untuk mengeksekusi perintah delete data
  }
}