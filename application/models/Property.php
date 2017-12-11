<?php

class Property extends CI_MODEL
{
    /**
     * Property Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function get($id)
    {
        $where['id'] = $id;
        $this->db->get_where('properties', $where);
    }

    public function update($id, $new_data)
    {
        $where['id'] = $id;
        $this->db->update('properties', $new_data, $where);
    }

    public function get_version()
    {
        $result_set = $this->db->query('SELECT VERSION()');
        return $result_set;
    }

    public function all()
    {
        $result_set = $this->db->get('properties');
        return $result_set->result_array();
    }
}
