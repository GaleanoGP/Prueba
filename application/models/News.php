<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Model
{

    public function getNews()
    {
        return $this->db
                    ->order_by('id', 'DESC')
                    ->get("news")
                    ->result_array();
    }

}