<?php
defined('BASEPATH') or exit('No direct script access allowed');
class LectorPdf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('fpdf/FPDF');
        $this->load->model('MantenimientoModel', 'm');
    }
    public function index()
    {
        header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=documento.pdf");
        readfile('uploads/archivos/' . $this->session->name . '.pdf');
    }
}
