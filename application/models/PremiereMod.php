<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class PremiereMod extends CI_Model
{
    public  function getPremiere($id_premiere)
    {
        $query = $this->db->query('select * from matieres_premiere');
        if ($id_premiere!="") {
          $query = $this->db->query('select * from matieres_premiere where id='.$id_premiere);
        }
        return $query->result_array();
    }
}