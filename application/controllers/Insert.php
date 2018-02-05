<?php


class insert extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('crud_m');
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->crud_m->tampil()->result();
		$this->load->view('tampil',$data);
	}
	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$userid = $this->input->post('userid');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
 
		$data = array(
			'userid' => $userid,
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			);
		$this->crud_m->input_data($data,'user');
		redirect('insert/index');
	}
	function edit(){
	$where = array('userid' => $userid);
	$data['user'] = $this->crud_m->edit_data($where,'user')->result();
	$this->load->view('v_edit',$data);
	}
	function update(){
	$userid = $this->input->post('userid');
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$fullname = $this->input->post('fullname');
 
	$data = array(
		'username' => $username,
		'password' => $password,
		'fullname' => $fullname
	);
 
	$where = array(
		'userid' => $userid
	);
 
	$this->crud_m->update_data($where,$data,'user');
	redirect('insert/index');
	}
 
}


