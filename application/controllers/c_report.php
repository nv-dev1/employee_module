<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_report extends CI_Controller {

    public function __conctruct(){
        parent:: __construct();
        $this->load->library('employee_report');
        $this->load->model('employeeModel');
    }

    public function index(){

        $this->load->library('employee_report');
        $this->load->model('employeeModel');
        $this->load->view('EmployeeReport/v_report', ['data' ->$data]);
        $data = $this->employeeModel->getAllData();
    }
}
