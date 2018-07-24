<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller{	
	public function __construct(){
		parent::__construct();	
	    //load the model      
		$this->load->model('datamotor');
	 	$this->load->helper('url');
	 	$this->load->helper('form');
	}
	public function index(){
		$this->home();
	}
	
	public function home(){
	    //load the method of model
		$teks['title']="SPK MOTOR DENGAN DATABASE FUZZYr";
		$this->load->view("template/load_css", $teks);		
		$this->load->view("template/navbar");
	    //return the data in view  
		$this->load->view("utama");
		$this->load->view("template/footer");
		$this->load->view("template/load_js");
	} 
	public function lihat_motor($id=1){			
	    //load the method of model
		$data['motor'] = $this->datamotor->lihatMotor($id);
		$teks['title']="Lihat Motor";
		$this->load->view("template/load_css", $teks);		
		$this->load->view("template/navbar");
	    //return the data in view  
		$this->load->view("lihat", $data);
		$this->load->view("template/footer");
		$this->load->view("template/load_js");
	}
	public function lihat_semua_motor($start=0){
		//load lib pagination
		$this->load->helper(array('html'));
		$this->load->library('pagination');
		$config['total_rows'] = $this->datamotor->totalMotor();
        $config['per_page'] = 6;
        $config['uri_segment'] = 3; 
        //mengatur tag
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = '&#x25B6;';
        $config['prev_link'] = '&#x25C0;';
        //url setiap link
        $config['base_url'] = base_url().'beranda/lihat_semua_motor/';
        $this->pagination->initialize($config);

//        menentukan offset record dari uri segment
        $start = $this->uri->segment(3, 0);
//        ubah data menjadi tampilan per limit
        $motor = $this->datamotor->lihatMotorLimit($config['per_page'],$start)->result(); 
        $data = array(
            'motor' => $motor,
            'pagination' =>  $this->pagination->create_links(),
            'start' => $start
        );

		$teks['title']="Daftar Motor";
		$this->load->view("template/load_css", $teks);		
		$this->load->view("template/navbar");
	    //return the data in view  
		$this->load->view("motor", $data);
		$this->load->view("template/footer");
		$this->load->view("template/load_js");
	} 

	public function tampil_motor(){		
		$data['motor'] = $this->datamotor->get_motor();
        //output to json format
        echo json_encode($data);
	}

	public function hasil_fuzzy(){			
	    //load the method of model
		$data['motor'] = $this->datamotor->lihatMotor();
		$teks['title']="SPK MOTOR DENGAN DATABASE FUZZYr";
		$this->load->view("template/load_css", $teks);		
		$this->load->view("template/navbar");
	    //return the data in view  
		$this->load->view("hasil", $data);
		$this->load->view("template/footer");
		$this->load->view("template/load_js");
	}

	public function inputnilai(){ 
		//memasukan variabel post ke array
		if($this->input->post('jenis')==0){
			$jenis="Manual";
		}
		else if($this->input->post('jenis')==1){
			$jenis="Matic";
		}
		
		if($this->input->post('merek')==0){
			$merek="Honda";
		}
		else if($this->input->post('merek')==1){
			$merek="Kawasaki";
		}
		else if($this->input->post('merek')==2){
			$merek="Suzuki";
		}
		else if($this->input->post('merek')==3){
			$merek="Yamaha";
		}
		$logika=$this->input->post('logika');
		$harga=$this->input->post('harga');
		$mesin=$this->input->post('mesin');
		$konsumsi_bensin=$this->input->post('konsumsi_bensin');
		$kapasitas_bensin=$this->input->post('kapasitas_bensin');

		$data['logika']=$logika;
		$data['merek']=$merek;
		$data['jenis']=$jenis;
		$data['harga']=$harga;
		$data['mesin']=$mesin;
		$data['konsumsi_bensin']=$konsumsi_bensin;
		$data['kapasitas_bensin']=$kapasitas_bensin;
		$data['motor']=$this->datamotor->join_fuzzy($jenis,$merek,$harga,$mesin,$konsumsi_bensin,$kapasitas_bensin);
		$teks['title']="SPK MOTOR DENGAN DATABASE FUZZY";
		$this->load->view("template/load_css", $teks);		
		$this->load->view("template/navbar");
	    //return the data in view  

		if($logika==0){//dan
			$this->load->view("hasil_dan", $data);
		}
		else{			
			$this->load->view("hasil_atau", $data);
		}
		
		$this->load->view("template/footer");
		$this->load->view("template/load_js");
	}
	/*
	$data = array(
			'jenis' => $this->input->post('jenis'),
			'merek' => $this->input->post('merek'),
		);*/
}
