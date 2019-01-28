<?php
class InvoiceController extends CI_Controller{
	function printAdmit(){
		$this->load->view("getAdmitCard");
	}
	function printFAdmit(){
		
		$this->load->view("invoice/printFAdmit");
	}
	function printFResult(){
		
		$this->load->view("invoice/printFResult");
	}
	function printFCounsellingCard(){
		
		$this->load->view("invoice/printFCounsellingCard");
	}
}