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

    public function get()
    {
        return "4 Bedroom 2 Story House";
    }

    public function get_version()
    {
        $result_set = $this->db->query('SELECT VERSION()');
        return $result_set;
    }
}
