<?php
class student_info extends CI_Model{
	function saveInfo(){
	$i = false;
	$photo_name = time().trim($_FILES['image']['name']);
		$this->load->library('upload');
		// Set configuration array for uploaded photo.
		$image_path = realpath(APPPATH . '../assets/images/stuImage');
		$config['upload_path'] = $image_path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '120';
		$config['file_name'] = $photo_name;
		// Upload first photo and create a thumbnail of it.
		if (!empty($_FILES['image']['name'])) {
			$this->upload->initialize($config);
			if ($this->upload->do_upload('image')) {
				// ---------------------------------- Redirect Success Page ----------------------
				$i = true;
			}
			else{
				echo $this->upload->display_errors();
			}
		}
		if($i){
			$data = array(
				"student_id" => $this->input->post("student_id"),
				"name" => $this->input->post("name"),
				"fName" => $this->input->post("fname"),
				"address" => $this->input->post("address"),
				"city" => $this->input->post("city"),
				"state" => $this->input->post("state"),
				"pin" => $this->input->post("pin"),
				"mobile" => $this->input->post("mobile"),
				"dob" => date("Y-m-d", strtotime($this->input->post("dob"))),
				"heighQ" => $this->input->post("heighQ"),
				"courseApplied" => $this->input->post("courseApplied"),
				"timing" => $this->input->post("timing"),				
				"gender" => $this->input->post("gender"),
				"photo" => $photo_name,
				"email" => $this->input->post("email"),
				"password" => $this->input->post("password"),
				"total_fee" => $this->input->post("total_fee"),
				"fee_method" => $this->input->post("fee_method"),
				"joinDate" => date("Y-m-d"),
				"joinTime" => date("h:i:s"),
				"branch_id" => $this->input->post("branchId"),
				"branch_no" => $this->input->post("batchNo"),
				"isApprove" => "yes"
			);
		
			if($this->db->insert("student_info",$data)){
				$abc['id'] = $this->input->post("student_id");
				$abc['isTrue'] = true;
				return $abc;
			}
		}
		
	}
	
	function getDataById($id){
		$this->db->where("branch_id",$id);
		$this->db->group_by("timing");
		return $this->db->get("student_info")->result();
	}
	
	function getAllByBranchBatch($branch,$batch){
		$this->db->where("branch_id",$branch);
		$this->db->where("timing",$batch);
		return $this->db->get("student_info")->result();
	}
	
	function getAll(){
		return $this->db->get("student_info")->result();
	}
}