<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $admin_id=  $this->session->userdata('admin_id');
        if($admin_id==NULL)
        {
            redirect('admin');
        }
    }
    
    public function index()
    {
        $data=array();
        
        $data['title']="Admin Panel | itXperts";
        
        
        $data['main_content']=$this->load->view('admin_pages/admin_main_content','',true);
        $this->load->view('admin_pages/admin_master',$data);
    }
    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        
        
        $logout_message=array();
             
             $logout_message['log_message']="Your Are Successfully Logouted !";
             $this->session->set_userdata($logout_message);
        
        redirect('Admin');
    }
    public function add_category()
    {
        $data=array();
        
        $data['title']="Add Category | ItXperts";
        
        
        $data['main_content']=$this->load->view('admin_pages/add_category','',true);
        $this->load->view('admin_pages/admin_master',$data);
    }
    public function save_category()
    {
        $this->Dashboard_Model->save_category_info();
        
        $confirm_message=array();
        
        $confirm_message['message']="Add Category Successfully !";
        $this->session->set_userdata($confirm_message);
        
        redirect('Dashboard/add_category');
    }
    public function manage_category()
    {
        $data=array();
        
        $data['title']="Manage Category | ItXperts";
        
        $data['category_info']=  $this->Dashboard_Model->select_category_info();
        
        $data['main_content']=$this->load->view('admin_pages/manage_category',$data,true);
        $this->load->view('admin_pages/admin_master',$data);
    }
    public function unpublish_category($category_id)
    {
        $this->Dashboard_Model->unpublish_category_by_id($category_id);
        
        redirect('Dashboard/manage_category');
    }
    public function publish_category($category_id)
    {
        $this->Dashboard_Model->publish_category_by_id($category_id);
        
        redirect('Dashboard/manage_category');
    }
    public function delete_category($category_id)
    {
        $this->Dashboard_Model->delete_category_by_id($category_id);
        
        redirect('Dashboard/manage_category');
    }
    public function edit_category($category_id)
    {
        $data=array();
        
        $data['title']="edit Category | ItXperts";
        
        $data['category_info']=  $this->Dashboard_Model->select_category_info_by_id($category_id);
        $data['main_content']=$this->load->view('admin_pages/edit_category',$data,true);
        $this->load->view('admin_pages/admin_master',$data);
    }
    public function update_category()
    {
        $this->Dashboard_Model->update_category_info();
        
        $confirm_message=array();
        
        $confirm_message['message']="Update Category Successfully !";
        $this->session->set_userdata($confirm_message);
        
        redirect('Dashboard/manage_category');
    }
    public function add_course()
    {
        $data=array();
        
        $data['title']="Add Course | ItXperts";
        
        $data['all_publish_category']= $this->Welcome_Model->select_all_publish_category_info();
        
        $data['main_content']=$this->load->view('admin_pages/add_course',$data,true);
        $this->load->view('admin_pages/admin_master',$data);
    }
    public function save_course()
    {
        $this->Dashboard_Model->save_course_info();
        
        $confirm_message=array();
        
        $confirm_message['message']="Save Course Info Successfully !";
        $this->session->set_userdata($confirm_message);
        
        redirect('Dashboard/add_course');
    }
    public function manage_course()
    {
        $data=array();
        
        $data['title']="Manage Courses | ItXperts";
        
        $data['course_info']=  $this->Dashboard_Model->select_course_info();
        
        $data['main_content']=$this->load->view('admin_pages/manage_course',$data,true);
        $this->load->view('admin_pages/admin_master',$data);
    }
    public function unpublish_course($course_id)
    {
        $this->Dashboard_Model->unpublish_course_by_id($course_id);
        
        redirect('Dashboard/manage_course');
    }
    public function publish_course($course_id)
    {
        $this->Dashboard_Model->publish_course_by_id($course_id);
        
        redirect('Dashboard/manage_course');
    }
    
    public function delete_course($course_id)
    {
        $this->Dashboard_Model->delete_course_by_id($course_id);
        
        redirect('Dashboard/manage_course');
    }
    public function edit_course($course_id)
    {
        $data=array();
        
        $data['title']="Edit Courses | ItXperts";
        
        $data['all_publish_category']= $this->Welcome_Model->select_all_publish_category_info();
        $data['course_info']=  $this->Dashboard_Model->select_course_info_by_id($course_id);
        
        $data['main_content']=$this->load->view('admin_pages/edit_course',$data,true);
        $this->load->view('admin_pages/admin_master',$data);
    }
    public function update_course()
    {
        $this->Dashboard_Model->update_course_info();
        
        $confirm_message=array();
        
        $confirm_message['message']="Update Category Successfully !";
        $this->session->set_userdata($confirm_message);
        
        redirect('Dashboard/manage_course');
    }
    public function add_blog_category()
    {
        $data=array();
        
        $data['title']='Dashboard-IT Experts | Add blog category';
        
        
        $data['main_content']=  $this->load->view('admin_pages/add_blog_category','',TRUE);
        $this->load->view('admin_pages/admin_master',$data);
    }
    public function save_blog_category()
    {
        $this->Dashboard_Model->save_blog_category_info();
        
        $confirm_message=array();
        
        $confirm_message['message']='Save Blog Category Successfully !';
        $this->session->set_userdata($confirm_message);
        
        redirect('Dashboard/add_blog_category');
    }
    public function add_blog()
    {
        $data=array();
        
        $data['title']='Dashboard-IT Experts | Add blog';
        
        $data['all_publish_blog_category']=  $this->Dashboard_Model->select_all_publish_blog_category();
        $data['main_content']=  $this->load->view('admin_pages/add_blog',$data,TRUE);
        $this->load->view('admin_pages/admin_master',$data);
    }
    public function save_blog()
    {
        $this->Dashboard_Model->save_blog_info();
        
        
        $confirm_message=array();
        
        $confirm_message['message']='Save Blog Data Successfully !';
        $this->session->set_userdata($confirm_message);
        
        redirect('Dashboard/add_blog');
    }
}
