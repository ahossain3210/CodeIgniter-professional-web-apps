<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $data=array();
            
            $data['title']="IT Experts | Home";
            
            $data['slider']=TRUE;
            
            $data['all_publish_category']= $this->Welcome_Model->select_all_publish_category_info();
            
            $data['main_content']=  $this->load->view('pages/home_content',$data,TRUE);
            $this->load->view('master',$data);
	}
	public function course()
	{
            $data=array();
            
            $data['title']="IT Experts | Our Courses ";
            
            $data['slider']=null;
            
            $data['all_publish_category']= $this->Welcome_Model->select_all_publish_category_info();
            
            /*
             * Start Pagination
             */
            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost:431/bd_it_experts/Welcome/course';
            $config['total_rows'] = $this->db->count_all('tbl_course');
            $config['per_page'] = 5;
            $config['full_tag_open'] = "<ul class='pagination pagination-lg'>";
            $config['full_tag_close'] = "<ul>";
            $config['first_tag_open'] = "<li>";
            $config['first_tag_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tag_close'] = "</li>";
//            $config['first_link'] = "First";
//            $config['last_link'] = "Last";
            $config['next_tag_open'] = "<li>";
            $config['next_tag_close'] = "<li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tag_close'] = "</li>";
            $config['num_tag_open'] = "<li>";
            $config['num_tag_close'] = "</li>";
            $config['cur_tag_open'] = "<li class='active'><a>";
            $config['cur_tag_close'] = "</a></li>";

            $this->pagination->initialize($config);
            
            
            $data['all_publish_course']= $this->Welcome_Model->select_all_publish_course_info($config['per_page'],  $this->uri->segment(3));
            
            
            /*
             * End Pagination
             */
            
            
            $data['main_content']=  $this->load->view('pages/courses',$data,TRUE);
            $this->load->view('master',$data);
	}
	public function contact()
	{
            $data=array();
            
            $data['title']="IT Experts | Registation";
            
            $data['slider']=null;
            
            $data['all_publish_course']=  $this->Welcome_Model->select_all_publish_course();
            
            $data['main_content']=  $this->load->view('pages/contact',$data,TRUE);
            $this->load->view('master',$data);
	}
	public function about()
	{
            $data=array();
            
            $data['title']="About | IT Experts";
            
            $data['slider']=null;
            
            $data['main_content']=  $this->load->view('pages/about','',TRUE);
            $this->load->view('master',$data);
	}
	
	public function job_list()
	{
            $data=array();
            
            $data['title']="Job list - choose your right job here | IT Experts";
            
            $data['slider']=null;
            
            $data['main_content']=  $this->load->view('pages/job_list','',TRUE);
            $this->load->view('master',$data);
	}
	public function user_profile()
	{
            $data=array();
            
            $data['title']="My profile | IT Experts";
            
            $data['slider']=null;
            
            $data['main_content']=  $this->load->view('pages/user_profile','',TRUE);
            $this->load->view('master',$data);
	}
	public function service()
	{
            $data=array();
            
            $data['title']="Service | IT Experts";
            
            $data['slider']=null;
            
            $data['main_content']=  $this->load->view('pages/service','',TRUE);
            $this->load->view('master',$data);
	}
	public function sign_up()
	{
            $data=array();
            
            $data['title']="Create new account | IT Experts";
            
            $data['slider']=null;
            
            $data['main_content']=  $this->load->view('pages/sign_up','',TRUE);
            $this->load->view('master',$data);
	}
	public function user_login()
	{
            $data=array();
            
            $data['title']="User login | IT Experts";
            
            $data['slider']=null;
            
            $data['main_content']=  $this->load->view('pages/login','',TRUE);
            $this->load->view('master',$data);
	}
	public function blog()
	{
            $data=array();
            
            $data['title']="IT Experts | Our blogs ";
            
            $data['slider']=null;
            
              /*
             * Start Pagination
             */
            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost:431/bd_it_experts/Welcome/blog';
            $config['total_rows'] = $this->db->count_all('tbl_blog');
            $config['per_page'] = 3;
            $config['full_tag_open'] = "<ul class='pagination pagination-lg'>";
            $config['full_tag_close'] = "<ul>";
            $config['first_tag_open'] = "<li>";
            $config['first_tag_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tag_close'] = "</li>";
//            $config['first_link'] = "First";
//            $config['last_link'] = "Last";
            $config['next_tag_open'] = "<li>";
            $config['next_tag_close'] = "<li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tag_close'] = "</li>";
            $config['num_tag_open'] = "<li>";
            $config['num_tag_close'] = "</li>";
            $config['cur_tag_open'] = "<li class='active'><a>";
            $config['cur_tag_close'] = "</a></li>";

            $this->pagination->initialize($config);
            
            
            $data['all_publish_blog']= $this->Welcome_Model->select_all_publish_blog_info($config['per_page'],  $this->uri->segment(3));
                        
            /*
             * End Pagination
             */
            $data['popular_blog']=$this->Welcome_Model->select_popular_blog_info();
            $data['recent_blog']=$this->Welcome_Model->select_recent_blog_info();
            $data['main_content']=  $this->load->view('pages/blog',$data,TRUE);
            $this->load->view('master',$data);
	}
	public function instructor_profile()
	{
            $data=array();
            
            $data['title']="IT Experts | Instructor Details";
            
            $data['slider']=null;
            
            $data['main_content']=  $this->load->view('pages/profile','',TRUE);
            $this->load->view('master',$data);
	}
        
	public function category_course($category_id)
	{
            $data=array();
            
            $data['title']="IT Experts | Category Course ";
            
            $data['all_publish_category']= $this->Welcome_Model->select_all_publish_category_info();
            $data['category_course_info']= $this->Welcome_Model->select_category_course_info_by_id($category_id);
            
//            echo '<pre>';
//            print_r($data['category_course_info']);
//            exit();
            
            $data['main_content']=  $this->load->view('pages/category_course',$data,TRUE);
            $this->load->view('master',$data);
	}
	public function course_details($course_id)
	{
            $data=array();
            
            $data['title']="IT Experts | Course Details";
            
            $data['all_publish_category']= $this->Welcome_Model->select_all_publish_category_info();
            $data['course_info']= $this->Welcome_Model->select_course_info_by_id($course_id);
            
            $data['main_content']=  $this->load->view('pages/course_details',$data,TRUE);
            $this->load->view('master',$data);
	}
        
        public function blog_details($blog_id)
        {
//            echo $blog_id;
//            exit();
//            
            $data=array();
            $data['title']="IT Experts | Blog details";
            
            $data['blog_info']=$this->Welcome_Model->select_blog_info_by_id($blog_id);
            
//            echo "<pre>";
//            print_r($data['blog_info']);
//            exit();
            /*
             * Update Hit Count
             */
            $hit_count=$data['blog_info']->hit_count+1;
//            echo $hit_count;
//            exit();
            $this->Welcome_Model->update_hit_count($blog_id,$hit_count);
            /*
             * End Updating Hit count
             */
            $data['all_publish_blog_category'] = $this->Dashboard_Model->select_all_publish_blog_category();
            $data['popular_blog']=$this->Welcome_Model->select_popular_blog_info();
            $data['recent_blog']=$this->Welcome_Model->select_recent_blog_info();
            $data['main_content']=$this->load->view('pages/blog_details',$data,TRUE);
            $this->load->view('master',$data);
        }
        public function category_blog($blog_category_id)
        {
//            echo $blog_category_id;
//            exit();
            $data=array();
            $data['title']="IT Experts | Category blogs";
            
            $data['popular_blog']=$this->Welcome_Model->select_popular_blog_info();
            $data['recent_blog']=$this->Welcome_Model->select_recent_blog_info();
            $data['category_blog']=$this->Welcome_Model->select_category_blog_info($blog_category_id);
            $data['main_content']=$this->load->view('pages/category_blogs',$data,TRUE);
            $this->load->view('master',$data);
        }
        public function search_course_item()
        {
            $data=array();
            
            $data['title']='Searching results | itXperts';
            
            $search_item=  $this->input->post('search_item');
            
//            echo $search_item;
//            exit();
            
            $search_course_item=  $this->Welcome_Model->select_search_course_item_info($search_item);
            $data['all_publish_category']= $this->Welcome_Model->select_all_publish_category_info();
            
            if($search_course_item==NULL)
            {
                $data['main_content']=  $this->load->view('pages/empty_search_course_item',$data,TRUE);
                $this->load->view('master',$data);
            }
            else
            {
                
                $data['search_course_item']=$search_course_item;
                
                $data['main_content']=  $this->load->view('pages/search_course_item',$data,TRUE);
                $this->load->view('master',$data);
            }
            
        }
        
        public function save_applicant()
        {
            $data=array();
            
            $data['applicant_name']=  $this->input->post('applicant_name',TRUE);
            $data['applicant_mobile_number']=  $this->input->post('applicant_mobile_number',TRUE);
            $data['applicant_email']=  $this->input->post('applicant_email',TRUE);
            $data['course_title']=  $this->input->post('course_title',TRUE);
            
//            echo "<pre>";
//            print_r($data);
//            exit();
//            
        $this->Welcome_Model->save_applicant_info($data);
        
        
        $confirmation_message=array();
        
        
        $confirmation_message['message']="Your registration successfull !";
        $this->session->set_userdata($confirmation_message);
        
        redirect('Welcome/contact');
        
        }
        public function save_user()
        {
//            $this->load->helper(array('form', 'url'));

//            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('user_first_name', 'required');
            $this->form_validation->set_rules('user_last_name',  'required');
            $this->form_validation->set_rules('user_username', 'required');
            $this->form_validation->set_rules('user_email', 'required');
            $this->form_validation->set_rules('user_password', 'required', array('required' => 'min_length[6]'));
            $this->form_validation->set_rules('con_password', 'required|matches[user_password]');
            $this->form_validation->set_rules('user_mobile', 'required');
            $this->form_validation->set_rules('user_location', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                redirect('sign-up');
            }
            else
            {
                $this->Welcome_Model->save_user_info();
                
                redirect('Welcome');
            }
        }
        public function user_logout()
        {
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('user_name');
            
            $data=array();
            $data['message']="Your are successfully logouted !";
            $this->session->set_userdata($data);
            
            redirect('user-login');
            
        }
        public function user_login_check()
        {
            $result=$this->Welcome_Model->user_login_check_info();
            
            if($result)
            {
                $data=array();
                $data['user_id']=$result->user_id;
                $data['user_name']=$result->user_first_name.' '.$result->user_last_name;
                $this->session->set_userdata($data);
                
                redirect('Welcome');
            }  else {
                $mdata=array();
                $mdata['error_message']="Your username or password doesn't match!";
                $this->session->set_userdata($mdata);
                
                redirect('user-login');
            }
        }
        public function save_comment()
        {
            $this->Welcome_Model->save_comment_info();
            
        }
        public function like_post()
        {
//            $c_date=date('Y-m-d h:ia');
            $bid=  $this->input->post('bid');
            
            $data=array();
            
            $data['bid']=$bid;
//            $data['c_date']=$c_date;
            $this->Welcome_Model->like_post_info($data);
        }
}
