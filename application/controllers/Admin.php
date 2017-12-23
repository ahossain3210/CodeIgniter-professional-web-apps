<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $admin_id=  $this->session->userdata('admin_id');
        if($admin_id !=NULL)
        {
            redirect('dashboard');
        }
    }
    
    public function index()
    {
        $data=array();
        
        $data['title']='itXperts | Admin Login';
        
        $this->load->view('admin_pages/admin_login',$data);
    }
    public function admin_login_check()
    {
        $data=array();
        
        $admin_email=  $this->input->post('admin_email');
        $admin_passwored= md5($this->input->post('admin_password'));
        
        $this->load->Model('admin_model');
        
        $result=$this->Admin_Model->admin_login_check_info($admin_email,$admin_passwored);
        
        if($result)
        {
            $sdata=array();
            
            $sdata['admin_id']=$result->admin_id;
            $sdata['admin_name']=$result->admin_name;
            
            
            $this->session->set_userdata($sdata);
            
            redirect('dashboard');
        }
         else {
             
             $con_message=array();
             
             $con_message['message']="Your Email or Password Invalid !";
             $this->session->set_userdata($con_message);
             
            redirect('Admin/index');
         }
        

    }
}

