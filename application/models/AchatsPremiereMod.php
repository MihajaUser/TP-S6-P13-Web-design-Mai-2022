<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class AchatsPremiereMod extends CI_Model
{
    public  function getAchatsPremiere($id_premiere)
    {
        $query = $this->db->query('select * from view_achats_premiere');
        if ($id_premiere!="") {
          $query = $this->db->query('select * from view_achats_premiere where Achatss_premiereId_premiere='.$id_premiere);
        }
        return $query->result_array();
    }

    public  function insertAchats_premiere($data)
    {
        $this->db->insert("Achats_premiere", $data);
    }
    public  function insertStock_premiere($data)
    {
        $this->db->insert("stocks_premiere", $data);
    }
}