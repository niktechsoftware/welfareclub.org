 <?php
	class employeemodel extends CI_Model{  
   function getInfoById($reg_no){
			$this->db->where("registration_num",$reg_no);
			return $this->db->get("registration")->row();
		}
		
		function conformedEmployeeBankDetail(){
				
			$id = $this->input->post('reg_no');
			$val = array(
			
					"bank_name" => $this->input->post("bank_name"),
					"account_no" => $this->input->post("account_no"),
					"bank_address" => $this->input->post("bank_address"),
					"ifsc_code" => $this->input->post("ifsc_code"),
					"user_name" => $this->input->post("user_name"),
					"password" =>md5($this->input->post("password")),
					"status" => conformed
					
			);
		
			$this->db->where("registration_num",$id);
			if($this->db->update("registration",$val)){
				$data['isTrue'] = true;
				$data['id'] = $id;
				return $data;
			}else{
				$data['isTrue'] = true;
				return $data;
			}
		}
}
		