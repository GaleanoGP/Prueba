<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if(!empty($this->session->userdata('email'))){
            redirect('dashboard');
        }
    }

    public function index()
    {

        $config = array(
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]'
            ]
        );

        $this->form_validation->set_rules($config);

        if($this->form_validation->run() === FALSE){
            $this->load->view("includes/header");
            $this->load->view("pages/auth/signin");
            $this->load->view("includes/footer");
        }else{
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            if($user = $this->user->getUser($email)){
                if(password_verify($password, $user['password'])){
                    unset($user['password']);
                    $this->session->set_userdata($user);
                    redirect('dashboard');
                }else{
                    $this->session->set_flashdata('error', 'Email or password is invalid.');
                    redirect(current_url());
                }
            }else{
                $this->session->set_flashdata('error', 'Email or password is invalid.');
                redirect(current_url());
            }
        }
    }


    public function signup()
    {

        $config = array(
            [
                'field' => 'first_name',
                'label' => 'First name',
                'rules' => 'required|regex_match[/^[a-zA-Z\s]+$/]'
            ],
            [
                'field' => 'last_name',
                'label' => 'Last name',
                'rules' => 'required|regex_match[/^[a-zA-Z\s]+$/]'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]'
            ],
            [
                'field' => 'confirm_password',
                'label' => 'Confirm password',
                'rules' => 'required|min_length[8]|matches[password]'
            ]
        );

        $this->form_validation->set_rules($config);

        if($this->form_validation->run() === FALSE){
            $this->load->view("includes/header");
            $this->load->view("pages/auth/signup");
            $this->load->view("includes/footer");
        }else{
            $data = array();
            $data['first_name'] = $this->input->post('first_name');
            $data['last_name'] = $this->input->post('last_name');
            $data['email'] = $this->input->post('email');
            $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            if(!$this->user->emailIsExists($data['email'])){
                if($this->user->addUser($data)){
                    $this->session->set_flashdata('success', 'You are registered successfully.');
                }else{
                    $this->session->set_flashdata('error', 'Something went wrong please try again.');
                }
                redirect(current_url());
            }else{
                $this->session->set_flashdata('error', 'Email is already exists.');
                redirect(current_url());
            }
        }

    }


}
