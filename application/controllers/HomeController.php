<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if(empty($this->session->userdata('email'))){
           redirect(base_url());
        }
    }


    public function index()
    {
        $data['news'] = $this->news->getNews();
        $this->load->view("includes/header");
        $this->load->view("pages/dashboard/dashboard", $data);
        $this->load->view("includes/footer");
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }


    public function users()
    {
        if($this->session->role !== 'admin'){
            redirect('dashboard');
        }

        $data['users'] = $this->user->getAllUsers();
        $this->load->view("includes/header");
        $this->load->view("pages/dashboard/users", $data);
        $this->load->view("includes/footer");
    }


}