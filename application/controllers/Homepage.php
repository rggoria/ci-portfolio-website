<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
    /*  Constructor  */
    public function __construct() {
        parent::__construct();
        // Load the helpers needed
        $this->load->helper(['form', 'url']);
        // Load the libraries needed
        $this->load->library(['form_validation', 'session']);
    }

    public function index() {
        $data['title'] = 'Homepage';
        $data['author'] = $this->config->item('author');  
        $this->load->view('include/header', $data);
        $this->load->view('homepage/homepage_view');
        $this->load->view('include/footer');
    }

    public function check_validation() {
        $required = "This field must not be empty";

        $this->form_validation->set_rules('name', 'Name', 'required', array(
            'required' => $required
        ));

        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email', array(
            'required' => $required,
            'valid_email' => 'Enter a valid email'
        ));

        $this->form_validation->set_rules('subject', 'Subject', 'required', array(
            'required' => $required
        ));

        $this->form_validation->set_rules('message', 'Message', 'required', array(
            'required' => $required
        ));
        // Form Validation
        if (!$this->form_validation->run()) {
            $this->session->set_flashdata([
                'email_error' => 'Email doesn\'t sent',
                'name' => form_error('name'),
                'email' => form_error('email'),
                'subject' => form_error('subject'),
                'message' => form_error('message'),
            ]);

            redirect(base_url('#contact'));
        } else {
            // Get data from inputs
            $this->session->set_flashdata('email_success', 'Email sent');
            redirect('Homepage/#contact');
        }
    }
}
?>