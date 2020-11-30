<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

    public function index() {
        $data['title'] = 'Blog';

        $this->load->view('templates/header', $data);
        $this->load->view('posts/index');
        $this->load->view('templates/footer');
    }

}
