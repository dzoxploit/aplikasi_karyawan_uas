<?php
class Employee extends CI_Controller {
private $limit = 30;
public function __construct(){
 
        parent::__construct();
        $this->load->helper('url');
        $this->load->library(array('session','form_validation'));
        $this->load->model('Employee_model','',TRUE);
 
}
     
  public function index($offset = 0){
        // offset
        $uri_segment = 3;
        $offset = $this->uri->segment($uri_segment);
         
        // load data
        $employee = $this->Employee_model->get_paged_list($this->limit, $offset)->result();
         
        // generate pagination
        $this->load->library('pagination');
        $config['base_url'] = site_url('employee/index/');
        $config['total_rows'] = $this->Employee_model->count_all();
        $config['uri_segment'] = $uri_segment;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
         
        $this->load->library('table');
        $this->table->set_empty("&nbsp;");
        echo "<table id='example' class='table table-bordered'>";
        echo "<thead>
          <th>Employee id</th>
          <th>first name</th>
          <th>hire date</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>birthday</th>
          <th>dept_id</th>
          <th>employee address</th>
          <th>Status</th>
          <th width='200px'>Action</th>
          </thead>" ;
        echo "<tbody>";
        $i = 0 + $offset;
           foreach ($employee as $employee){
            $links1 =  anchor('employee/update/'.$employee->empid,'Edit');
             $links2 =  anchor('employee/delete/'.$employee->empid,'Hapus');
            $links3 = anchor('employee/tambah','Tambah data');
          echo "<tr>";
          echo "<td>$employee->empid</td>";
          echo "<td>$employee->empfirstname</td>";
          echo "<td>$employee->hire_date</td>";
          echo "<td>$employee->emp_email</td>";
          echo "<td>$employee->emp_mobile</td>";
          echo "<td>$employee->emp_bdate</td>";
          echo "<td>$employee->deptid</td>";
          echo "<td>$employee->empaddress</td>";
          echo "<td>$employee->status</td>";
          echo "<td>$links1 
          $links2
          </td>";
          echo "</tr>";

        }
        echo "</tbody>";
        echo "</table>";
        echo "<button type='button' class='btn-primary' value='Tambah data'>$links3</button></a>";
        $data['table'] = $this->table->generate();
         
        // load view
        $this->load->view('employeelist.php', $data);
    }
     
   public function tambah(){
    $this->load->model('Employee_model');
    $dataf['tbl_dept']=$this->Employee_model->getdeptid();
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Employee_model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Employee_model->save(); // Panggil fungsi save() yang ada di SiswaModel.php
        redirect('employee');
      }
    }
    
    $this->load->view('employeeAdd',$dataf);
  }
  
  public function update($empid){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Employee_model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Employee_model->update($empid); // Panggil fungsi edit() yang ada di SiswaModel.php
        redirect('employee');
      }
    }
    $data['departemen'] = $this->Employee_model->view_by($id);
    $this->load->view('employeeEdit', $data);
  }
  
  public function delete($id){
    $this->Employee_model->delete($id); // Panggil fungsi delete() yang ada di SiswaModel.php
    redirect('employee');
  }
}
?>