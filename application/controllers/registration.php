<?php
class registration extends CI_Controller{
	
	function saveRegistration(){
		$id = $this->db->query("SELECT s_no From registration order by s_no DESC Limit 1");
		if($id->num_rows()<1){
			$registration_num = WELFARE170001;
		}else{
			$id = $id->row();
			$reg =$id->s_no + 17000 ;
			$registration_num ="WELFARE".$reg;
		}
		
		$data['form_no'] = $registration_num;
		$data['student_name_hin'] = $this->input->post("nameh");
		$data['student_name_eng'] = $this->input->post("namee");
		$data['father_name'] = $this->input->post("fname");
		$data['mother_name'] = $this->input->post("mname");
		$data['dob'] = $this->input->post("dob");
		$data['student_address'] = $this->input->post("address");
		$data['mobile_number'] = $this->input->post("mobile");
		$data['varg'] = $this->input->post("varg");
		$data['subject'] = $this->input->post("subject");
		$data['disability'] = $this->input->post("disability");
		$data['school_addres'] = $this->input->post("schoolname");
		$data['class'] = $this->input->post("class");
		
		$data['status']="pending";
		$data['regdate'] =date("Y-m-d");
		
		
		$photo_name = rand(5,1000).trim($_FILES['student_photo']['name']);
		
		$sname = str_replace(" ","_",$photo_name);
		
		$guardian_sig = rand(5,1000).trim($_FILES['guardian_sign']['name']);
		
		$gsign = str_replace(" ","_",$guardian_sig);
		
		$student_sign = rand(5,1000).trim($_FILES['student_sign']['name']);
		
		$ssig = str_replace(" ","_",$student_sign);
		
		$data['student_photo'] = $sname;
		$data['student_sign'] = $ssig;
		$data['guardian_sign']  = $gsign;
		
		$this->load->model("regitrationModel");
		
		if($query = $this->regitrationModel->saveRestration($data)){
			
			
			$this->load->library('upload');
			// Set configuration array for uploaded photo.
			
			$image_path = realpath(APPPATH . '../assets/photo');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $sname;
			
			if (!empty($sname)) {
				$this->upload->initialize($config);
				$this->upload->do_upload('student_photo');
			}
			
			$image_path = realpath(APPPATH . '../assets/studentsign');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $ssig;
			
			if (!empty($ssig)) {
				$this->upload->initialize($config);
				$this->upload->do_upload('student_sign');
			}
			
			$image_path = realpath(APPPATH . '../assets/guardiansign');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $gsign;
			
			if (!empty($gsign)) {
				$this->upload->initialize($config);
				$this->upload->do_upload('guardian_sign');
			}
			redirect(base_url()."index.php/registration/registrationSlip/$registration_num");
		}
	}
	
	
	
	function registrationSlip(){
		$data['registration'] = 	$this->uri->segment(3);
		$this->load->view("registrationSlip",$data);
	}
	
	function printSlip(){
		$data['registration'] = $this->uri->segment(3);
		$this->load->view("printSlip",$data);
	}
}