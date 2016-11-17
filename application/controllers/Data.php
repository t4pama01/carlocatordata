<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Data_model');
    }

	public function naytaData() {
		
		$data['asiakkaat']=$this->Data_model->getData();
		
		$data['sivun_sisalto']="data/naytaData";
		$this->load->view('menu/valikko',$data);
	}
}