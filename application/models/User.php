<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model
{

    public function emailIsExists($email, $user_id = null)
    {
        if(!empty($user_id)){
            $this->db->where('id', '!=', $user_id);
        }
        $user = $this->db->get_where('users', array(
            'email' => $email
        ))->num_rows();
        return $user > 0;
    }


    public function addUser($user_data)
    {
        return $this->db->insert('users', $user_data);
    }


    public function getUser($email)
    {
        $user = $this->db->get_where('users', array(
            'email' => $email
        ))->row_array();
        if(count($user) > 0){
            return $user;
        }else{
            return false;
        }
    }


    public function getAllUsers()
    {
        return $this->db
                    ->order_by('id', 'DESC')
                    ->get('users')
                    ->result_array();
    }
    
}