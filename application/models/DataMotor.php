<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
class DataMotor extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	
	//count
	function totalMotor() {
        $this->db->from('motor');
        return $this->db->count_all_results();
    }
    //    tampilkan dengan limit
    function lihatMotorLimit($limit, $start) {
        $this->db->order_by('id', 'ASC');
        $this->db->limit($limit, $start);
        return $this->db->get('motor');
    }

	//tampil data 
	function lihatMotor($id){
	   $this->db-> select('*');
	   $this->db-> from('motor');
	   $this->db-> where('id',$id);
	   $query=$this->db->get();
	   if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	//tampil data 
	function get_motor(){
	   $this->db-> select('*');
	   $this->db-> from('motor');
	   $query=$this->db->get();
	   if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	function join_fuzzy($jenis,$merek,$harga,$mesin,$konsumsi_bensin,$kapasitas_bensin){		
	   	$this->db-> select('m.id,m.merek,m.nama_motor,m.gambar,fh.'.$harga.',fm.'.$mesin.',fi.'.$konsumsi_bensin.',fk.'.$kapasitas_bensin.'');
	   	$this->db-> from('motor as m');
	   	$this->db-> join('fuzzy_harga as fh','m.id=fh.id');
	   	$this->db-> join('fuzzy_mesin as fm','m.id=fm.id');
	   	$this->db-> join('fuzzy_konsumsi_bensin as fi','m.id=fi.id');
	   	$this->db-> join('fuzzy_kapasitas_bensin as fk','m.id=fk.id');
		$this->db->where('m.jenis',$jenis);
		$this->db->where('m.merek',$merek);
	   	$this->db-> order_by('m.id','ASC');
		$query=$this->db->get();
	   	if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	// data laporan
	function getMotor(){
		$this->db->select('*');
		$this->db->from('motor');
		$query=$this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
}