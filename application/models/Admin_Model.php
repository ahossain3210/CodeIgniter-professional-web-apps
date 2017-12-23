<?php

class Admin_Model extends CI_Model{
    
    public function admin_login_check_info($admin_email,$admin_passwored)
    {
        $this->db->select('*')
                ->from('tbl_admin')
                ->where('admin_email',$admin_email)
                ->where('admin_password',$admin_passwored);
        $query_result=  $this->db->get();
        $result=$query_result->row();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
        
        return $result;
    }
}
