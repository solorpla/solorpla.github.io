<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('login');
	}
	public function login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->db->from('user');
		$this->db->where('username',$username);
		$cek = $this->db->get()->row();
		if($cek==NULL){
			$this->session->set_flashdata('alert','
		<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">×</span></button>
        <strong>
			Username tidak ada ⛔
		</strong> 
        </div>
		');
		redirect('auth');
		} else if($password==$cek->password) {
			$data = array(
				'id_user'		=> $cek->id_user,
				'nama'			=> $cek->nama,
				'username'		=> $cek->username,
				'level'			=> $cek->level,
			);
			$this->session->set_userdata($data);
			redirect('admin/home');
		} else {
			$this->session->set_flashdata('alert','
		<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">×</span></button>
        <strong>
			Password salah ⛔
		</strong> 
        </div>
		');
		redirect('auth');
		}

		}
		public function logout(){
			$this->session->sess_destroy();
			redirect('home');
		}

		
}
