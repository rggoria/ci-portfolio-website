<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
    /*  Constructor  */
    public function __construct() {
        parent::__construct();
        // Load the helpers needed
        $this->load->helper('url');
    }

    public function index() {
        $data['title'] = 'Homepage';
        $data['author'] = $this->config->item('author');  
        $this->load->view('include/header', $data);
        $this->load->view('homepage/homepage_view');
        $this->load->view('include/footer');
    }
}
?>