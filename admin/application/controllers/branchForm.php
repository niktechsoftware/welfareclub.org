<?php
class branchForm extends CI_Controller{
	
	function save_form(){
		
		$branchId = $this->input->post("clinic_id");
		$n = 1000 + $this->invoice_serial->graterId();
		$invoice_no = "GF".$n;
		
		$cl = $this->opening_closing_balance->closing()->closing_balance;
		$clbalance = $cl + $this->input->post("payBalance");
		
		if($this->opening_closing_balance->update($clbalance)):
		$in = array(
				"invoice_no" => $invoice_no,
				"reason" => "Branch Form Fee",
				"invoice_date" => date("Y-m-d")
		);
		
			$data=array(
				"branchId"=>$this->input->post("clinic_id"),
				"noOfForm"=>$this->input->post("noOfForm"),
				"balance"=>$this->input->post("fee"),
				"previousBalance"=>$this->input->post("dueBalance"),
				"totalBalance"=>$this->input->post("tBalance"),
				"payBalance"=>$this->input->post("payBalance"),
				"date"=>date("Y-m-d"),
				"invoice_no" => $invoice_no
				
			);
			
			$dayBook = array(
					"paid_to" => $this->input->post("recievedBy"),
					"paid_by" => $this->input->post("clinic_id"),
					"reason" => "Branch Form Fee",
					"dabit_cradit" => "credit",
					"amount" => $this->input->post("payBalance"),
					"closing_balance" => $clbalance,
					"pay_date" => date("Y-m-d"),
					"pay_mode" => "Cash",
					"branch_id" => "10001",
					"invoice_no" => $invoice_no
			);
				
			$a = $this->db->insert("invoice_serial",$in);
			$b = $this->db->insert("branchform",$data);
			$c = $this->db->insert("day_book",$dayBook);
			if($a && $b && $c){
				redirect(base_url()."apanel/branchPaymentInvice/$branchId/$invoice_no");
			}else{
				$mysql->rollback();
			}
			
			
			
			 endif;
		
	}
}