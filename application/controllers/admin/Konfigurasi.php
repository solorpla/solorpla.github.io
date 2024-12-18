<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Konfigurasi extends CI_Controller {
    public function __construct(){
        parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }
	public function index(){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
        $data = array(
            'judul_halaman' => 'Halaman Konfigurasi',
			'konfig'		=> $konfig
        );
		$this->template->load('template_admin','admin/konfigurasi_index', $data);
	}
	public function update(){
		$where = array(
			'id_konfigurasi' => 1
		);
		$data = array(
			"judul_website"		=> $this->input->post('judul'),
			"profil_website"	=> $this->input->post('profil_website'),
			"instagram"			=> $this->input->post('instagram'),
			"tiktok"			=> $this->input->post('tiktok'),
			"email"      		=> $this->input->post('email'),
		);
		$this->db->update('konfigurasi',$data,$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">×</span></button>
        <strong>
			Berhasil memperbarui konfigurasi ✅
		</strong> 
        </div>
		');
        redirect('admin/konfigurasi');
	}
}

?>

