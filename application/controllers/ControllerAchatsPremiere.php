<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerAchatsPremiere extends CI_Controller
{
    var $tab;
    public function passerAchats()
    {
        $this->load->model('PremiereMod');
        $data['premiere']=$this->PremiereMod->getPremiere("");
        $data['page']='achatsPremiere.php';
        $this->load->view('template',$data);
    }
    public function validerAchats()
    {
        $this->load->model('PremiereMod');
        $this->load->model('AchatsPremiereMod');
        $data['premiere']=$this->PremiereMod->getPremiere("");
        $detailsAchats = array( 'id'=> NULL,'date_Achats'=>$this->input->post('date_today'), 'id_premiere' => $this->input->post('id_premiere'),
        'quantite' =>$this->input->post('quantite'),
        );
        $insertStock = array(
            'id'=>NULL,
            'id_premiere'=>$this->input->post('id_premiere'),
            'entre'=>$this->input->post('quantite'),
            'sortie'=>'0',
            'date_transaction'=>$this->input->post('date_today')
        );
       // var_dump($insertStock);
         $this->AchatsPremiereMod->insertAchats_premiere($detailsAchats);
         $this->AchatsPremiereMod->insertStock_premiere($insertStock);
        $data['page']='achatsPremiere.php';
        if ($this->input->post('produitRupture')) {
            $this->load->model('StocksMod');
            $data['stocks']=$this->StocksMod->getStocksPremiereReste();
            $data['page']='stocksPremiere.php';
        }
       $this->load->view('template',$data);
    }
}