<?php
 
class User extends CI_Controller {
 
public function __construct(){
 
        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');
 
}
 
public function index()
{
$this->load->view("login.php");
}
 
public function register_user(){
 
      $user=array(
      'name'=>$this->input->post('name'),
      'email'=>$this->input->post('email'),
      'username'=>$this->input->post('username'),
      'password'=>md5($this->input->post('password')),
      'phone'=>$this->input->post('phone'),
      'is_admin'=>md5($this->input->post('password')),
      'date'=>date('Y-m-d H:i:s'),
      'status'=>$this->input->post('status')
        );
        print_r($user);
 
$email_check=$this->user_model->email_check($user['email']);
 
if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_view');
 
}
else{
 
  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('user');
 
 
}
 
}
 
public function login_view(){
 
$this->load->view("login.php");
 
}
 
function login_user(){
  $user_login=array(
 
  'email'=>$this->input->post('email'),
  'password'=>md5($this->input->post('password'))
 
    );
 
    $data=$this->user_model->login_user($user_login['email'],$user_login['password']);
      if($data)
      {
        $this->session->set_userdata('id',$data['id']);
        $this->session->set_userdata('name',$data['name']);
        $this->session->set_userdata('email',$data['email']);
        $this->session->set_userdata('username',$data['username']);
        $this->session->set_userdata('phone',$data['phone']);
        $this->session->set_userdata('status',$data['status']);
 
         $this->load->view("user_profile.php");
 
      }

      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("login.php");
 
      }
 
 
}
 
function user_profile(){
 
$this->load->view('user_profile.php');
 
}
public function register(){
  $this->load->view('register.php');
}

public function user_logout(){
 
  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}
 
}
 
?>