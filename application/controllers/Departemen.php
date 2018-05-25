<?php
class Departemen extends CI_Controller {
private $limit = 30;
public function __construct(){
 
        parent::__construct();
        $this->load->helper('url');
        $this->load->library(array('session','form_validation'));
        $this->load->model('Departemen_model','',TRUE);
 
}
     
  public function index($offset = 0){
        // offset
        $uri_segment = 3;
        $offset = $this->uri->segment($uri_segment);
         
        // load data
        $departemen = $this->Departemen_model->get_paged_list($this->limit, $offset)->result();
         
        // generate pagination
        $this->load->library('pagination');
        $config['base_url'] = site_url('departemen/index/');
        $config['total_rows'] = $this->Departemen_model->count_all();
        $config['uri_segment'] = $uri_segment;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
         
        $this->load->library('table');
        $this->table->set_empty("&nbsp;");
        echo "<table id='example' class='table table-bordered'>";
        echo "<thead>
          <th>Description</th>
          <th>Head of depatement</th>
          <th>Ruangan</th>
          <th width='200px'>Action</th>
          </thead>" ;
        echo "<tbody>";
        $i = 0 + $offset;
           foreach ($departemen as $departemen){
            $links1 =  anchor('departemen/update/'.$departemen->dept_id,'Edit');
             $links2 =  anchor('departemen/delete/'.$departemen->dept_id,'Hapus');
             $links3 = anchor('departemen/tambah/','Tambah data');
          echo "<tr>";
          echo "<td>$departemen->description</td>";
          echo "<td>$departemen->headofdept</td>";
          echo "<td>$departemen->ruangan</td>";
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
        $this->load->view('departemenlist.php', $data);
    }
     
   public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Departemen_model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Departemen_model->save(); // Panggil fungsi save() yang ada di SiswaModel.php
        redirect('departemen');
      }
    }
    
    $this->load->view('departemenAdd');
  }
  
  public function update($id){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Departemen_model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Departemen_model->update($id); // Panggil fungsi edit() yang ada di SiswaModel.php
        redirect('departemen');
      }
    }
    $data['departemen'] = $this->Departemen_model->view_by($id);
    $this->load->view('departemenEdit', $data);
  }
  
  public function delete($id){
    $this->Departemen_model->delete($id); // Panggil fungsi delete() yang ada di SiswaModel.php
    redirect('departemen');
  }
}
?>