<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	if($this->uri->segment(3)){
		$data["msg"]=$this->uri->segment(3);
		$this->load->view("welcome_message",$data);
		}else{
		$data["msg"]=1;
		$this->load->view("welcome_message",$data);
		}
	}
	public function getAdmit()
	{
	
		$reg= $this->input->post("regnumber");
		$this->db->where("registration_number",$reg);
		$rate = $this->db->get("tbl_enrollment");
		if($rate->num_rows()>0)
		{
		
			$rate1=$rate->row();
			if(strlen($rate1->roll_number)>1){
		
		
		redirect("invoiceController/printAdmit/$reg");
		}else{
		$msg=7;
		redirect("welcome/index/$msg");
		}
		}
		else{ 
		$msg=9;
		redirect("welcome/index/$msg");
		}
	}
	public function result()
	{
	if($this->uri->segment(3)){
		$data["msg"]=$this->uri->segment(3);
		$this->load->view("result",$data);
		}else{
		$data["msg"]=1;
		$this->load->view("result",$data);
		}
		
		
	}
	public function getResult()
	{
	$roll= $this->input->post("rollNo");
	$this->db->where("student_id",$roll);
		$rate = $this->db->get("result");
		if($rate->num_rows()>0)
		{
		
			$rate1=$rate->row();
			redirect("invoiceController/printFResult/$roll");
			
		}
		else{ 
		$msg=9;
		redirect("welcome/result/$msg");
		}
		
		
	}
	public function councling()
	{
		$data['roll_num']= $this->input->post("id");
		$this->load->view('welcome_message');
	}
	public function counsellingCard()
	{
	        if($this->uri->segment(3)){
		$data["msg"] = $this->uri->segment(3);
		$this->load->view("counsellingCard",$data);
		}else{
		$data["msg"]=1;
		$this->load->view("counsellingCard",$data);
		}
		
	}
	public function getCounsellingCard()
	{
	$roll= $this->input->post("rollNo");
	$this->db->where("student_id",$roll);
		$rate = $this->db->get("counselling");
		if($rate->num_rows()>0)
		{
		
			$rate1=$rate->row();
			redirect("invoiceController/printFCounsellingCard/$roll");
			
		}
		else{ 
		$msg=9;
		redirect("welcome/counsellingCard/$msg");
		}
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */