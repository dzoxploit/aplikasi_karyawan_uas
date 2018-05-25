<?php
class Employee_model extends CI_model{
    // table name
    private $tbl_employee= 'tbl_employee';
 
    public function Employee(){
        parent::Model();
    }
    // get number of persons in database
    public function count_all(){
        return $this->db->count_all($this->tbl_employee);
    }
    // get persons with paging
    public function get_paged_list($limit = 10, $offset = 0){
        $this->db->order_by('empid','asc');
        return $this->db->get($this->tbl_employee, $limit, $offset);
    }
    public function view_by($empid){
    $this->db->where('empid', $empid);
    return $this->db->get('tbl_employee')->row();
  }
    // get person by id
    public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
    
    $this->form_validation->set_rules('empfirstname', 'description', 'required|max_length[100]');
    $this->form_validation->set_rules('hire_date', 'headofdept', 'required');
    $this->form_validation->set_rules('emp_email', 'emp_email', 'required|max_length[50]');
    $this->form_validation->set_rules('emp_mobile', 'emp_mobile', 'required|numeric|max_length[20]');
    $this->form_validation->set_rules('emp_bdate', 'emp_bdate', 'required|date');
    $this->form_validation->set_rules('deptid', 'deptid', 'required|numeric|max_length[50]');
    $this->form_validation->set_rules('empaddress', 'empaddress', 'required|max_length[200]');
    $this->form_validation->set_rules('status', 'status', 'required|max_length[50]');
    
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array(
     "empfirstname" => $this->input->post('empfirstname'),
      "hire_date" => $this->input->post('hire_date'),
      "emp_email" => $this->input->post('emp_email'),
      "emp_mobile" => $this->input->post('emp_mobile'),
      "emp_bdate" => $this->input->post('emp_bdate'),
      "deptid" => $this->input->post('deptid'),
      "empaddress" => $this->input->post('empaddress'),
      "status" => $this->input->post('status'),
    );
    
    $this->db->insert('tbl_employee', $data); // Untuk mengeksekusi perintah insert data
  }
  public function getdeptid(){
    $dataf = array();
    $query = $this->db->get('tbl_dept');
    if($query->num_rows() > 0){
      foreach($query->result_array() as $row){
        $dataf[] = $row;
      }
    }
    $query->free_result();
    return $dataf;

  }
  
  // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  public function update($id){
    $data = array(
     "empfirstname" => $this->input->post('empfirstname'),
      "hire_date" => $this->input->post('hire_date'),
      "emp_email" => $this->input->post('emp_email'),
      "emp_mobile" => $this->input->post('emp_mobile'),
      "emp_bdate" => $this->input->post('emp_bdate'),
      "deptid" => $this->input->post('deptid'),
      "empaddress" => $this->input->post('empaddress'),
      "status" => $this->input->post('status'),
    );
    
    $this->db->where('empid', $id);
    $this->db->update('tbl_employee', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($id){
    $this->db->where('empid', $id);
    $this->db->delete('tbl_employee'); // Untuk mengeksekusi perintah delete data
  }
}