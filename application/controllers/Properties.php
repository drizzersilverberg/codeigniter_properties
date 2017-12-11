<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Properties extends CI_Controller
{
    /**
     * Show Properties List
     * [GET] BASE_URL/properties/index
     */
    public function index()
    {
        $this->load->helpers('url');
        $data['user_name'] = 'Bernard';
        $data['status_group'] = ['All', 'Available', 'Unavailable'];
        $this->load->view('layouts/header');
        $this->load->view('layouts/foundation_nav');
        $this->load->view('properties/index', $data);
        $this->load->view('layouts/footer');
    }

    /**
     * Show A Property Detail
     * [GET] homestead.codeigniter.dev/properties/show/{id}
     *
     * @param      integer  $id     Property identifier
     */
    public function show($id)
    {
        $this->load->model('Property');
        $data['name'] = $this->Property->get();
        $data['id'] = $id;
        $this->load->view('properties/show', $data);
    }

    public function db_test()
    {
        $this->load->model('Property');
        $this->Property->connection_test();
    }
}
