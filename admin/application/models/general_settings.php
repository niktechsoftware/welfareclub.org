<?php
	class general_settings extends CI_Model{
		function saveInfo(){
			$id = $this->input->post('clinic_id');
			$newId = $this->getNewId();
			$logo = time().trim($_FILES['logo']['name']);
			$image = time().trim($_FILES['image']['name']);
			$val = array(
					"login_type" => $this->input->post("login_type"),
					"username" => $this->input->post("uid"),
					"password" => md5($this->input->post("pass")),
					"cilnic_name" => $this->input->post("clinic_name"),
					"address_1" => $this->input->post("address_1"),
					"address_2" => $this->input->post("address_2"),
					"city" => $this->input->post("city"),
					"state" => $this->input->post("state"),
					"pin" => $this->input->post("pin"),
					"phone_number" => $this->input->post("phone_number"),
					"fax_number" => $this->input->post("fax_number"),
					"mobile_number" => $this->input->post("mobile_number"),
					"email1" => $this->input->post("email1"),
					"email2" => $this->input->post("email2"),
					"head_name" => $this->input->post("head_name"),
					"doctor_name" => $this->input->post("doctor_name"),
					"doctor_name_1" => $this->input->post("doctor_name_1"),
					"doctor_name_2" => $this->input->post("doctor_name_2"),
					"doctor_name_3" => $this->input->post("doctor_name_3"),
					"doctor_name_4" => $this->input->post("doctoe_name_4"),
					"image"=> $logo,
					"logo"=> $image,
					"clinic_id" => $newId
			);
			if(strlen($_FILES['image']['name']) > 0):
				$photo_name = time().trim($_FILES['image']['name']);
					
				$this->load->library('upload');
				// Set configuration array for uploaded photo.
				$image_path = realpath(APPPATH . '../assets/images/docImg');
				$config['upload_path'] = $image_path;
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size'] = '1024';
				$config['file_name'] = $photo_name;
				// Upload first photo and create a thumbnail of it.
				if (!empty($_FILES['image']['name'])) {
					$this->upload->initialize($config);
					if ($this->upload->do_upload('image')) {
						// ---------------------------------- Reset session value of photo ----------------------
						if($id == $this->session->userdata("clinic_id")):
						$this->session->set_userdata("photo",$photo_name);
						endif;
					}
				}
			endif;
			if(strlen($_FILES['logo']['name']) > 0):
				$photo_name = time().trim($_FILES['logo']['name']);
					
				$this->load->library('upload');
				// Set configuration array for uploaded photo.
				$image_path = realpath(APPPATH . '../assets/images/docImg');
				$config['upload_path'] = $image_path;
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size'] = '1024';
				$config['file_name'] = $photo_name;
				// Upload first photo and create a thumbnail of it.
				if (!empty($_FILES['logo']['name'])) {
					$this->upload->initialize($config);
					if ($this->upload->do_upload('logo')) {
						// ---------------------------------- Reset session value of logo ----------------------
						if($id == $this->session->userdata("clinic_id")):
						$this->session->set_userdata("logo",$photo_name);
						endif;
					}
				}
			endif;
			
			if($this->db->insert("general_settings",$val)){
				return true;
			}else{
				return false;
			}
		}
		
		function updateInfo(){
			$id = $this->input->post('clinic_id');
				
			if(strlen($_FILES['image']['name']) > 0):
			$photo_name = time().trim($_FILES['image']['name']);
			$new_img = array(
					"image"=> $photo_name
			);
			$old_img = $this->input->post("old_image");
			@chmod("assets/images/docImg/" . $old_img, 0777);
			@unlink("assets/images/docImg" . $old_img);
		
			if($query = $this->updateImage($new_img,$id)){
				$this->load->library('upload');
				// Set configuration array for uploaded photo.
				$image_path = realpath(APPPATH . '../assets/images/docImg');
				$config['upload_path'] = $image_path;
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size'] = '1024';
				$config['file_name'] = $photo_name;
				// Upload first photo and create a thumbnail of it.
				if (!empty($_FILES['image']['name'])) {
					$this->upload->initialize($config);
					if ($this->upload->do_upload('image')) {
						// ---------------------------------- Reset session value of photo ----------------------
						if($id == $this->session->userdata("clinic_id")):
						$this->session->set_userdata("photo",$photo_name);
						endif;
					}
				}
			}
			endif;
			if(strlen($_FILES['logo']['name']) > 0):
			$photo_name = time().trim($_FILES['logo']['name']);
			$new_img = array(
					"logo"=> $photo_name
			);
			$old_img = $this->input->post("old_logo");
			@chmod("assets/images/docImg/" . $old_img, 0777);
			@unlink("assets/images/docImg/" . $old_img);
		
			if($query = $this->updateImag($new_img,$id)){
				$this->load->library('upload');
				// Set configuration array for uploaded photo.
				$image_path = realpath(APPPATH . '../assets/images/docImg');
				$config['upload_path'] = $image_path;
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size'] = '1024';
				$config['file_name'] = $photo_name;
				// Upload first photo and create a thumbnail of it.
				if (!empty($_FILES['logo']['name'])) {
					$this->upload->initialize($config);
					if ($this->upload->do_upload('logo')) {
						// ---------------------------------- Reset session value of logo ----------------------
						if($id == $this->session->userdata("clinic_id")):
							$this->session->set_userdata("logo",$photo_name);
						endif;
					}
				}
			}
			endif;
				
			$val = array(
					"login_type" => $this->input->post("login_type"),
					"cilnic_name" => $this->input->post("clinic_name"),
					"address_1" => $this->input->post("address_1"),
					"address_2" => $this->input->post("address_2"),
					"city" => $this->input->post("city"),
					"state" => $this->input->post("state"),
					"pin" => $this->input->post("pin"),
					"phone_number" => $this->input->post("phone_number"),
					"fax_number" => $this->input->post("fax_number"),
					"mobile_number" => $this->input->post("mobile_number"),
					"email1" => $this->input->post("email1"),
					"email2" => $this->input->post("email2"),
					"head_name" => $this->input->post("head_name"),
					"doctor_name" => $this->input->post("doctor_name"),
					"doctor_name_1" => $this->input->post("doctor_name_1"),
					"doctor_name_2" => $this->input->post("doctor_name_2"),
					"doctor_name_3" => $this->input->post("doctor_name_3"),
					"doctor_name_4" => $this->input->post("doctoe_name_4")
			);
				
			$this->db->where("clinic_id",$id);
			if($this->db->update("general_settings",$val)){
				$data['isTrue'] = true;
				$data['id'] = $id;
				return $data;
			}else{
				$data['isTrue'] = true;
				return $data;
			}
		}
		
		function getInfoById($clinic_id){
			$this->db->where("clinic_id",$clinic_id);
			return $this->db->get("general_settings")->row();
		}
		function allInfo(){
			return $this->db->get("general_settings")->result();
		}
		function getNewId(){
			$a = $this->db->query("SELECT id FROM general_settings ORDER BY id DESC LIMIT 1");
			if($a->num_rows() > 0){
				$id = $a->row()->id + 1001;
				return $id;
			}else{
				return 1000;
			}
		}
		function updateImage($new_img,$id){
			$this->db->where("clinic_id",$id);
			if($this->db->update("general_settings",$new_img)){
				return true;
			}else{
				return false;
			}
		}
	}