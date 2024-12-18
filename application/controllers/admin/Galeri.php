<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Galeri extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
          redirect('auth');
        }
    }
	public function index(){
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
		$this->db->order_by('nama_foto', 'ASC');
        $data = array(
            'judul_halaman'   => 'Halaman Galeri',
            'galeri'        => $galeri,
    );
		$this->template->load('template_admin','admin/galeri_index',$data);
	}
   public function simpan(){
    $namafoto = date('YmdHis').'.jpg';
    $config['upload_path']          = 'assets/upload/galeri/';
    $config['max_size'] = 10000 * 10000; //3 * 1024 * 1024; //3Mb; 0=unlimited
    $config['file_name']            = $namafoto;
    $config['allowed_types']        = '*';
    $this->load->library('upload', $config);
    if($_FILES['foto']['size'] >= 10000 * 10000){
        $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible" role="alert">
            Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
                ');
        redirect('admin/galeri');
    }  elseif(! $this->upload->do_upload('foto')){
        $error = array('error' => $this->upload->display_errors());
    }else{
        $data = array('upload_data' => $this->upload->data());
    }  
       $data = array(
        'judul'  => $this->input->post('judul'),
        'foto_galeri'  => $namafoto,
       );
        $this->db->insert('galeri',$data);
        $this->session->set_flashdata('alert','
        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">×</span></button>
        <strong>
			Berhasil menambahkan galeri ✅
		</strong> 
        </div>
		');
        redirect('admin/galeri');
    }

    public function delete_data($id){
      $filename=FCPATH.'/assets/upload/galeri/'.$id;
        if(file_exists($filename)){
          unlink("./assets/upload/galeri/".$id);
        }
      $where = array(
        'foto_galeri'     => $id
      );
      $this->db->delete('galeri',$where);
        $this->session->set_flashdata('alert','
		<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">×</span></button>
        <strong>
			Berhasil menghapus galeri ✅
		</strong> 
        </div>
		');
        redirect('admin/galeri');
    }
  
}
