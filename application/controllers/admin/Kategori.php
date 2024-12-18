<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategori extends CI_Controller {
    public function __construct(){
        parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }
	public function index(){
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();
		$data = array(
            'judul_halaman' 	=> 'Kategori Konten',
            'kategori'          => $kategori
        );
        $this->template->load('template_admin','admin/kategori_index',$data);
	}
    public function tambah(){
        $data = array(
            'title'  =>'form tambah pengguna',
            'judul'  =>'tambah user'
        );
        $this->template->load('admin/template','admin/user_tambah',$data);
    }
    public function simpan(){
		$this->db->from('kategori');
		$this->db->where('nama_kategori',$this->input->post('nama_kategori'));
		$cek = $this->db->get()->result_array();
		if($cek<>NULL){
			$this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
				Kategori konten sudah digunakan ⛔
		  </div>
			');
			redirect('admin/kategori');
		}
		$data = array(
			'nama_kategori'	=>$this->input->post('nama_kategori')
		);
		$this->db->insert('kategori',$data);
		$this->session->set_flashdata('alert','
        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">×</span></button>
        <strong>
			Berhasil menambahkan kategori ✅
		</strong> 
        </div>
		');
        redirect('admin/kategori');
    }
	public function delete_data($id){
		$where = array(
			'id_kategori' => $id
		);
		$this->db->delete('kategori',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">×</span></button>
        <strong>
			Berhasil menghapus kategori ✅
		</strong> 
        </div>
		');
        redirect('admin/kategori');
	}
	public function update(){
		$where = array(
			'id_kategori' => $this->input->post('id_kategori')
		);
		$data = array(
			"nama_kategori"      => $this->input->post('nama_kategori')
		);
		$this->db->update('kategori',$data,$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">×</span></button>
        <strong>
			Berhasil memperbarui kategori ✅
		</strong> 
        </div>
		');
        redirect('admin/kategori');
	}
}
