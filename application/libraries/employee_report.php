<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
require_once (dirname(__FILE__).'/tcpdf/tcpdf.php');
class employee_report extends TCPDF {
    protected $ci;

    public function __construct(){
        $this-> ci =& get_instance();
    }
 }