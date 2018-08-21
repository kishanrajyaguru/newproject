<?php
class User extends CI_Controller
{
    public function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'email', 'required|email');
        $this->form_validation->set_rules('password', 'password', 'required|max_length[8]|min_length[4]');
        if ($this->form_validation->run()) {
            echo "success";
        } else {
            $this->load->view('index');
        }

    }

    public function register()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'firstname', 'required|alpha');
        $this->form_validation->set_rules('middlename', 'middlename', 'required|alpha');
        $this->form_validation->set_rules('lastname', 'lastname', 'required|alpha');
        $this->form_validation->set_rules('email', 'email', 'required|email');
        $this->form_validation->set_rules('password', 'password', 'required|max_length[8]|min_length[4]');
        if ($this->form_validation->run()) {
            echo "success";
        } else {
            $this->load->view('register');
        }
    }
}