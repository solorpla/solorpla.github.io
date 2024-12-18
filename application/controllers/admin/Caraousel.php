<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Caraousel extends CI_Controller {
    public function __construct(){
        parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }
	public function index(){
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
		$data = array(
            'judul_halaman' => 'Halaman Caraousel',
            'caraousel'      => $caraousel
        );
        $this->template->load('template_admin','admin/caraousel_index',$data);
	}
    public function tambah(){
        $data = array(
            'title'  =>'form tambah pengguna',
            'judul'  =>'tambah user'
        );
        $this->template->load('admin/template','admin/user_tambah',$data);
    }
    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'assets/upload/caraousel/';
        $config['max_size'] 			= 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
		$config['allowed_types']		= '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 10000 * 10000){
           
            redirect('admin/caraousel');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }
		$data = array(
			'judul'			=> $this->input->post('judul'),
			'foto'			=> $namafoto,
		);
		$this->db->insert('caraousel',$data);
		$this->session->set_flashdata('alert','
        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">×</span></button>
        <strong>
			Berhasil menambahkan caraousel ✅
		</strong> 
        </div>
		');
        redirect('admin/caraousel');
    }
	public function delete_data($id){
		$filename=FCPATH.'/assets/upload/caraousel/'.$id;
		if (file_exists($filename)){
			unlink("./assets/upload/caraousel/".$fid);
		}
		$where = array(
			'foto' => $id
		);
		$this->db->delete('caraousel',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">×</span></button>
        <strong>
			Berhasil menghapus caraousel ✅
		</strong> 
        </div>
		');
        redirect('admin/caraousel');
	}
	
}
