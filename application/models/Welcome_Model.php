<?php


class Welcome_Model extends CI_Model{
    
    public function select_all_publish_category_info()
    {
        $this->db->select('*')
                ->from('tbl_Category')
                ->where('publication_status',1);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_all_publish_course_info($per_page,$offset)
    {
        if ($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*')
                ->from('tbl_course')
                ->where('publication_status',1)
                ->limit($per_page,$offset);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
//    public function select_all_publish_course_info()
//    {
//        $this->db->select('*')
//                ->from('tbl_course')
//                ->where('publication_status',1);
//        $query_result=  $this->db->get();
//        $result=$query_result->result();
//        
//        return $result;
//    }
    public function select_latest_course_info()
    {
        $this->db->select('*')
                ->from('tbl_course')
                ->where('publication_status',1)
//                ->order_by('course_id','ASC')
                ->order_by('course_id','DESC')
                ->limit(6);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_category_course_info_by_id($category_id)
    {
        $this->db->select('*')
                ->from('tbl_course')
                ->join('tbl_category', 'tbl_category.category_id=tbl_course.category_id')
                ->where('tbl_course.category_id',$category_id)
                ->where('tbl_course.publication_status',1);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
        
        return $result;
    }
    public function select_course_info_by_id($course_id)
    {
        $this->db->select('*')
                ->from('tbl_course')
                ->join('tbl_category', 'tbl_category.category_id=tbl_course.category_id')
                ->where('tbl_course.course_id',$course_id);
        $query_result=  $this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function select_popular_blog_info()
    {
        $this->db->select('*')
                ->from('tbl_blog')
                ->where('publication_status',1)
                ->order_by('hit_count','DESC')
                ->limit(5);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_all_publish_blog_info($per_page,$offset)
    {
        if($offset==NULL)
        {
            $offset=0;
        }
        $this->db->select('*')
                ->from('tbl_blog')
                ->join('tbl_blog_category','tbl_blog.blog_category_id=tbl_blog_category.blog_category_id')
                ->where('tbl_blog.publication_status',1)
                ->order_by('tbl_blog.blog_id','DESC')
                ->limit($per_page,$offset);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_blog_info_by_id($blog_id)
    {
        $this->db->select('*')
                ->from('tbl_blog')
                ->where('blog_id',$blog_id);
        $query_result=  $this->db->get();
        $result=$query_result->row();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
        
        return $result;
    }
    public function update_hit_count($blog_id,$hit_count)
    {
        $this->db->set('hit_count',$hit_count)
                ->where('blog_id',$blog_id)
                ->update('tbl_blog');
    }

    public function select_category_blog_info($blog_category_id)
    {
        $this->db->select('*')
                ->from('tbl_blog')
                ->join('tbl_blog_category','tbl_blog.blog_category_id=tbl_blog_category.blog_category_id')
                ->where('tbl_blog.blog_category_id',$blog_category_id);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_recent_blog_info()
    {
        $this->db->select('*')
                ->from('tbl_blog')
                ->order_by('blog_id','DESC')
                ->limit(3);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_search_course_item_info($search_item)
    {
        $this->db->select('*')
                ->from('tbl_course')
                ->where("course_title Like '%$search_item%'") ;
//                ->LIKE('productName','%$search_item%');
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_all_publish_course()
    {
        $this->db->select('*')
                ->from('tbl_course')
                ->where('publication_status',1)
                ->order_by('course_id','DESC');
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function save_applicant_info($data)
    {
        $this->db->insert('tbl_applicant',$data);
    }
    public function save_user_info()
    {
        $data=array();
        
        $data['user_first_name']=  $this->input->post('user_first_name');
        $data['user_last_name']=  $this->input->post('user_last_name');
        $data['user_username']=  $this->input->post('user_username');
        $data['user_email']=  $this->input->post('user_email');
        $data['user_password']= md5($this->input->post('user_password'));
        $data['user_mobile']=  $this->input->post('user_mobile');
        $data['user_location']=  $this->input->post('user_location');
        
//        echo $data['user_name'];
//        echo'<pre>';
//        print_r($data);
//        exit();
        
        $this->db->insert('tbl_user',$data);
        
        
        $mdata=array();
        
        $mdata['user_id']=  $this->db->insert_id();
        $mdata['user_name']=$data['user_first_name'].' '.$data['user_last_name'];
        
        $this->session->set_userdata($mdata);
    }
    public function user_login_check_info()
    {
        $user_username=  $this->input->post('user_username');
        $user_password= md5($this->input->post('user_password'));
        
        $this->db->select('*')
                ->from('tbl_user')
                ->where('user_username',$user_username)
                ->where('user_password',$user_password);
        $query_result=  $this->db->get();
        $result=$query_result->row();
        
//        echo "<pre>";
//        print_r($result);
//        exit();
        
        return $result;
    }
    public function save_comment_info()
    {
        $data=array();
        $data['user_id']=  $this->session->userdata('user_id');
        $data['blog_id']=  $this->input->post('blog_id');
        $data['comment']=  $this->input->post('comment');
        
//        echo "<pre>";
//        print_r($data);
//        exit();
        $this->db->insert('tbl_comments',$data);
        
        
        $blog_id=$data['blog_id'];
        
        redirect('blog-details/'.$blog_id);
    }
    public function select_all_publish_comments_info_by_id($blog_id)
    {
        $this->db->select('*')
                ->from('tbl_comments')
                ->join('tbl_user','tbl_comments.user_id=tbl_user.user_id')
                ->where('tbl_comments.blog_id',$blog_id)
                ->where('tbl_comments.publication_status',1);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function like_post_info($data)
    {
        $query=  $this->db->insert('tbl_like',$data);
        if($query){
            echo "1";
        }else{
            echo "0";
        }
    }
    public function count_like_info($blog_id)
    {
        $this->db->select('*')
                ->from('tbl_like')
                ->where('bid',$blog_id);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        return $result;
    }
}
