<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class InfoMod extends CI_Model
{
    public  function getInformation()
    {
        $query = $this->db->query('select * from information');
        return $query->result_array();
    }

    public  function insert($data)
    {
        $this->db->insert("information", $data);
    }
}