<?php
class operator extends ci_controller{

	function __construct(){
		parent::__construct();
		$this->load->model('model_operator');
	}	

	function index()

	{
		$data['record']=  $this->model_operator->tampildata();
		$this->load->view('operator/lihat_data',$data);
	}

	function post()
	{
		if(isset($_POST['submit'])){
			//proses data
			$this->model_kategori->post();
			redirect('kategori');
		}
		else{
			$this->load->view('operator/form_input');
		}	
	}
}	