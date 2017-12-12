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
        $data['user_name'] = 'Bernard';
        $data['status_group'] = ['All', 'Available', 'Unavailable'];
        $data['properties'] = $this->Property->all();

        $data['selected_filter'] = $this->session->selected_filter;

        $this->load->view('layouts/header');
        $this->load->view('layouts/foundation_nav');
        $this->load->view('properties/index', $data);
        $this->load->view('layouts/footer');
    }

    public function kml_export()
    {
        # -- view in browser
        $this->output->set_content_type('application/xml');

        # -- download the kml
        // $this->output->set_content_type('application/octet-stream');
        // header('Content-Disposition: inline; filename="real_estate_kml_export.kml"');

        $this->load->view('properties/kml_export');
    }

    public function view_image()
    {
        $image = file_get_contents('assets/images/ThinkstockPhotos-160415922.jpg');
        $this->output->set_content_type('jpeg')->set_output($image);
    }

    public function set_filter()
    {
        $session_data['selected_filter'] = $this->input->get('filter');
        $this->session->set_userdata($session_data);
        redirect('properties/index');
    }

    /**
     * Show A Property Detail
     * [GET] homestead.codeigniter.dev/properties/show/{id}
     *
     * @param      integer  $id     Property identifier
     */
    public function show($id)
    {
        $version = $this->Property->get_version();
        $data['version'] = $version->conn_id->server_info;
        $data['name'] = $this->Property->get();
        $data['id'] = $id;
        $this->load->view('properties/show', $data);
    }

    public function db_test()
    {
        $this->Property->connection_test();
    }

    public function edit($id)
    {
        $this->load->helper('form');

        if ($_POST) {

            $image = FALSE;

            if ($_FILES) {
                $image = $this->do_upload();
            }

            $name = $this->input->post('name');
            $description = $this->input->post('description');
            $new_data['name'] = $name;
            $new_data['description'] = $description;

            if ($image) {
                $new_data['image'] = $image;
            }

            $this->Property->update($id, $new_data);
            redirect('properties/index');
        }

        $data['property'] = $this->Property->get($id);
        $this->load->view('layouts/header');
        $this->load->view('layouts/foundation_nav');
        $this->load->view('properties/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function do_upload()
    {
        $config['upload_path'] = './assets/images';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image_file');
        $data = $this->upload->data();
        return $data['file_name'];
    }
}
