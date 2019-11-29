<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class employeeModel extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    function createData(){
        $data = array (
            'emp_id' => $this->input->post('emp_id'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'role' => $this->input->post('role'),
            'contact_no' => $this->input->post('contact_no'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'date_of_birth' => $this->input->post('date_of_birth'),
            'emergency_contact' => $this->input->post('emergency_contact')
            
        );

        $this->db->insert('employee_info', $data);
    }
    
    function getAllData(){
        $query = $this->db->query('SELECT * FROM employee_info');
        return $query->result();
    }

    function getData($emp_id){
        $query = $this->db->query( 'SELECT * FROM employee_info WHERE `emp_id` =' .$emp_id );
        return $query->row();
    }

    function updateData($emp_id){
        $data = array (
            'emp_id' => $this->input->post('emp_id'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'role' => $this->input->post('role'),
            'contact_no' => $this->input->post('contact_no'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'date_of_birth' => $this->input->post('date_of_birth'),
            'emergency_contact' => $this->input->post('emergency_contact')
            
        ); 

        $this->db->where('emp_id', $emp_id);
        $this->db->update('employee_info', $data);
    }

    function deleteData($emp_id){
        $this->db->where('emp_id',$emp_id);
        $this->db->delete('employee_info');
    }
}


