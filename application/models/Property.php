<?php

class Property extends CI_MODEL
{
    /**
     * Property Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        return "4 Bedroom 2 Story House";
    }

    public function connection_test()
    {
        return $this->load->database('default', TRUE);
    }
}
