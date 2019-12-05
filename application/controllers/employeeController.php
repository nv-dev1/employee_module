<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class employeeController extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('employeeModel');
		$this->load->library('employee_report');
	}

	public function index()
	{
		$data['result'] = $this->employeeModel->getAllData();
		$this->load->view('employeeView', $data);
		
	}
	
	public function create(){
		$this->employeeModel->createData();
		redirect("employeeController");
	}
    
	public function edit($emp_id){
		$data['row'] = $this->employeeModel->getData($emp_id);
		$this->load->view('employeeDelete', $data);
	}

	public function update($emp_id){
		$this->employeeModel->updateData($emp_id);
		redirect("employeeController");
	}

	public function delete($emp_id){
		$this->employeeModel->deleteData($emp_id);
		redirect("employeeController");
	}
}
