<?php
defined('BASEPATH') or exit ('no direct script acces allowed');

class web extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    public function about (){
        $data['judul'] = "Halaman About";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    }
}
?>