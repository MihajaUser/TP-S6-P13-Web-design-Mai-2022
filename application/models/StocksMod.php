<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class StocksMod extends CI_Model
{
    public  function getStocksPremiereMouvement($id_premiere)
    {
        $query = $this->db->query('select * from view_stock_premiere');
        return $query->result_array();
    }

    public  function getStocksPremiereReste()
    {
        $query = $this->db->query('select * from view_stock_premiere_reste');
        return $query->result_array();
    }

    public  function getStocksFiniMouvement($id_premiere)
    {
        $query = $this->db->query('select * from view_stock_fini');
        return $query->result_array();
    }
    

    public  function getStocksFiniReste()
    {
        $query = $this->db->query('select * from view_stock_fini_reste');
        return $query->result_array();
    }

    public  function getFormuleFini($id_fini)
    {
        $myQuery ='select * from view_formule_fini where produits_finisId ='.$id_fini;
        echo $myQuery;
        $query = $this->db->query($myQuery); 
        return $query->result_array();
    }
    public function checkEnoughPremier($id_premiere,$id_fini,$quantite){
        $formule=$this->getFormuleFini($id_fini);
        $reste_premiere=$this->getStocksPremiereReste();
        var_dump($formule);
        var_dump($reste_premiere);
        $tab[]=0;
        for ($i=0; $i <count($reste_premiere) ; $i++) { 
            for ($j=0; $j <count($formule) ; $j++) { 
               if ($reste_premiere[$i]['']) {
                   # code...
               }
            }
        }
       
    }

    public  function insertStockFini($data)
    {
        $this->db->insert("stocks_fini", $data);
    }
}