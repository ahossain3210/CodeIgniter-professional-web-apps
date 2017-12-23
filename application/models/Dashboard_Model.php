<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard_Model
 *
 * @author Anwar
 */
class Dashboard_Model extends CI_Model{
    
    
    public function save_category_info()
    {
        $data=array();
        
        $data['category_name']=  $this->input->post('category_name',TRUE);
        $data['category_description']=  $this->input->post('category_description',TRUE);
        $data['publication_status']=  $this->input->post('publication_status',TRUE);
        
//        echo '<pre>';
//        print_r($data);
//        exit();
        
        $this->db->insert('tbl_category',$data);
    }
    public function select_category_info()
    {
        $this->db->select('*')
                ->from('tbl_category');
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function unpublish_category_by_id($category_id)
    {
        $this->db->set('publication_status',0)
                ->where('category_id',$category_id)
                ->update('tbl_category');
    }
    public function publish_category_by_id($category_id)
    {
        $this->db->set('publication_status',1)
                ->where('category_id',$category_id)
                ->update('tbl_category');
    }
    public function delete_category_by_id($category_id)
    {
        $this->db->where('category_id',$category_id)
                ->delete('tbl_Category');
    }
    public function select_category_info_by_id($category_id)
    {
        $this->db->select('*')
                ->from('tbl_Category')
                ->where('category_id',$category_id);
        $query_result=  $this->db->get();
        $result=$query_result->row();
        
        return $result;
    }
    public function update_category_info()
    {
        $data=array();
        
        $category_id=  $this->input->post('category_id');
        $data['category_name']=  $this->input->post('category_name',TRUE);
        $data['category_description']=  $this->input->post('category_description',TRUE);
        $data['publication_status']=  $this->input->post('publication_status',TRUE);
        
//        echo '<pre>';
//        print_r($data);
//        exit();
        
        $this->db->where('category_id',$category_id)
                ->update('tbl_category',$data);
    }
    public function save_course_info()
    {
        $data=array();
        
        $data['course_title']=$this->input->post('course_title',TRUE);
        $data['category_id']=$this->input->post('category_id',TRUE);
        $data['course_fee']=$this->input->post('course_fee',TRUE);
        $data['start_date']=$this->input->post('start_date',TRUE);
        $data['total_seat']=$this->input->post('total_seat',TRUE);
        $data['total_class']=$this->input->post('total_class',TRUE);
        $data['class_time']=$this->input->post('class_time',TRUE);
        $data['days']=$this->input->post('days',TRUE);
        $data['course_instructor']=$this->input->post('course_instructor',TRUE);
        $data['course_description']=$this->input->post('course_description',TRUE);
        $data['publication_status']=$this->input->post('publication_status',TRUE);
        
//        echo '<pre>';
//        print_r($data);
//        exit();
        
        $this->db->insert('tbl_course',$data);
    }
    public function select_course_info()
    {
        $this->db->select('*')
                ->from('tbl_course');
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function unpublish_course_by_id($course_id)
    {
        $this->db->set('publication_status',0)
                ->where('course_id',$course_id)
                ->update('tbl_course');
    }
    public function publish_course_by_id($course_id)
    {
        $this->db->set('publication_status',1)
                ->where('course_id',$course_id)
                ->update('tbl_course');
    }
    public function delete_course_by_id($course_id)
    {
        $this->db->where('course_id',$course_id)
                ->delete('tbl_course');
    }
    public function select_course_info_by_id($course_id)
    {
        $this->db->select('*')
                ->from('tbl_course')
                ->where('course_id',$course_id);
        $query_result=  $this->db->get();
        $result=$query_result->row();
        
        return $result;
    }
     public function update_course_info()
    {
        $data=array();
        
        $course_id=  $this->input->post('course_id');
        
        $data['course_title']=$this->input->post('course_title',TRUE);
        $data['category_id']=$this->input->post('category_id',TRUE);
        $data['course_fee']=$this->input->post('course_fee',TRUE);
        $data['start_date']=$this->input->post('start_date',TRUE);
        $data['total_seat']=$this->input->post('total_seat',TRUE);
        $data['total_class']=$this->input->post('total_class',TRUE);
        $data['class_time']=$this->input->post('class_time',TRUE);
        $data['days']=$this->input->post('days',TRUE);
        $data['course_instructor']=$this->input->post('course_instructor',TRUE);
        $data['course_description']=$this->input->post('course_description',TRUE);
        $data['publication_status']=$this->input->post('publication_status',TRUE);
        
//        echo '<pre>';
//        print_r($data);
//        exit();
        
        $this->db->where('course_id',$course_id)
                ->update('tbl_course',$data);
    }
    public function save_blog_category_info()
    {
        $data=array();
        
        $data['blog_category_name']=  $this->input->post('blog_category_name');
        $data['blog_category_description']=  $this->input->post('blog_category_description');
        $data['publication_status']=  $this->input->post('publication_status');
        
        $this->db->insert('tbl_blog_category',$data);
    }
    public function save_blog_info()
    {
        $data=array();
        
        $data['blog_title']=  $this->input->post('blog_title');
        $data['author_name']=  $this->input->post('author_name');
        $data['blog_category_id']=  $this->input->post('blog_category_id');
        $data['blog_short_description']=  $this->input->post('blog_short_description');
        $data['blog_long_description']=  $this->input->post('blog_long_description');
        $data['publication_status']=  $this->input->post('publication_status');
        //        .............Uploading Image Files Start..................
        
        
        $error=array();
        $fdata=array();
                $config['upload_path']          = './Blog_image/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 50000;
                $config['max_width']            = 5000;
                $config['max_height']           = 8000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('blog_image'))
                {
                        $error =$this->upload->display_errors();
                        
                        $errorMessage=array();
                        $errorMessage['error_message']="Your image does't upload!";
                        $this->session->set_userdata($errorMessage);
                        
//                       echo '<pre>';
//                       print_r($error);
                }
                else
                {
                        $fdata = $this->upload->data();
//                        echo '<pre>';
//                        print_r($fdata);
//                        exit();
                        $data['blog_image']=$config['upload_path'].$fdata['file_name'];
                }
        
        
//        .............Uploading Image Files Ends..................
                
//        echo "<pre>";
//        print_r($data);
//        exit();
                
        $this->db->insert('tbl_blog',$data);

    }
    public function select_all_publish_blog_category()
    {
        $this->db->select('*')
                ->from('tbl_blog_category')
                ->where('publication_status',1);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
        
        return $result;
    }
}
