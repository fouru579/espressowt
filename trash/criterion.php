<?php

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('signin', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('Name', 'Username', 'required|alpha');
                $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]',
                        array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('repass', 'Password Confirmation', 'required|matches[password]|min_length[8]');
                $this->form_validation->set_rules('cont', 'Contact Number', 'required|numeric');
                $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('signin');
                }
               
}
?>