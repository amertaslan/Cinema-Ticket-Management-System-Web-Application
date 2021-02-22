<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TicketRent extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index($id) {
        $this->load->view('frontend/ticketrent');
    }

    public function detay($id) {
        //$data = ["id"=>$id];
        
        $result = $this->db->select('*')->from('sessions')->where('id',$id)->get()->row();
        $this->load->view('frontend/ticketrent', $result);
    }
}