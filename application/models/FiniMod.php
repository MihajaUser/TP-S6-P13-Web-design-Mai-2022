<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class FiniMod extends CI_Model
{
    public  function getFini($id_fini)
    {
        $query = $this->db->query('select * from Produits_finis');
        if ($id_fini!="") {
          $query = $this->db->query('select * from Produits_finis where id='.$id_fini);
        }
        return $query->result_array();
    }
    
}