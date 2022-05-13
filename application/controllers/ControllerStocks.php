<?php
defined('BASEPATH') or exit('No direct script access allowed');
//require __DIR__ . '/include/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class ControllerStocks extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('StocksMod');
        $this->load->model('FiniMod');
    }
    public function stocksPremiere()
    {
        $data['stocks'] = $this->StocksMod->getStocksPremiereReste();
        $data['page'] = 'stocksPremiere.php';
        $this->load->view('template', $data);
    }

   
    public function stocksPremiereMouvement()
    {
        $data['stocks'] = $this->StocksMod->getStocksPremiereMouvement("");
        $data['page'] = 'mouveStockPremiere.php';
        $this->load->view('template', $data);
    }
    public function stocksFini()
    {
        $data['stocks'] = $this->StocksMod->getStocksFiniReste();
        $data['page'] = 'stocksFini.php';
        $this->load->view('template', $data);
    }

    public function fabricationProduit()
    {
        $data['fini'] = $this->FiniMod->getFini("");
        $data['page'] = 'fabricationProduit.php';
        $this->load->view('template', $data);
    }

    public function validerFabricationProduit()
    {
        $insertStock = array(
            'id' => NULL,
            'id_fini' => $this->input->post('id_fini'),
            'entre' => $this->input->post('quantite'),
            'sortie' => '0',
            'date_transaction' => $this->input->post('date_today')
        );
        // $this->StocksMod->insertStockFini($insertStock);
        // $this->stocksFini();
        $this->StocksMod->checkEnoughPremier(6, 2, 5);
        //$this->StocksMod->checkEnoughPremier(2,$this->input->post('id_fini'),$this->input->post('quantite'));
    }

    public function toPdf(){
        $live_mpdf = new \Mpdf\Mpdf();
        $data['stocks']= $this->StocksMod->getStocksPremiereReste();
        $all_html = $this->load->view('html_to_pdf',$data,true);  
        $live_mpdf->WriteHTML($all_html);
        $live_mpdf->Output();  

    }

    public function excelStocksPremiere()
    {
        $fileName = 'AchatAFaire.xlsx';
        $stocks = $this->StocksMod->getStocksPremiereReste();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Id');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Skills');
        $sheet->setCellValue('D1', 'Address');
        $sheet->setCellValue('E1', 'Age');
        $rows = 2;
        foreach ($stocks as $val) {
            $sheet->setCellValue('A' . $rows, $val['matieres_premiereId']);
            $sheet->setCellValue('B' . $rows, $val['matieres_premiereNom']);
            $sheet->setCellValue('C' . $rows, $val['matieres_premierePrix_unitaire']);
            $sheet->setCellValue('D' . $rows, $val['matieres_premiereMinimum']);
            $sheet->setCellValue('E' . $rows, $val['reste']);
            $rows++;
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save("D:/" . $fileName);
         header("Content-Type: application/vnd.ms-excel");
         $this->stocksPremiere();
    }
    
}
