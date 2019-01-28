<?php
class attenController extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	
	public function studentAtten()
	{
		$instituteID = $this->input->post("instituteID");
		$selectBatch = $this->input->post("selectBatch");
		$selectCourse = $this->input->post("selectCourse");
		?>
		
<div>
<table>
  <tr>
  <th>SNo</th>
    <th>Student Id</th>
    <th>student Name</th>
    <th>Mobile</th>
    <th>Presenti</th>
  </tr>
 
  <?php 		$date1=date('Y-m-d');
 				 $this->db->where("branch_id",$instituteID);
 				 $this->db->where("date1",$date1);
		  		$this->db->where("timing",$selectBatch);
		  		$this->db->where("courseApplied",$selectCourse);
		  		$var = $this->db->get("attendance");
		  		if($var->num_rows() > 0)
		  		{
		  			echo "Attendance is done for Today ";
		  		}
		  		else{
		  			$this->db->where("branch_id",$instituteID);
			  		$this->db->where("timing",$selectBatch);
			  		$this->db->where("courseApplied",$selectCourse);
			  		$var = $this->db->get("student_info");
			  		$i=1;
					  foreach ($var->result() as $info):
					  	?><tr>	<td> <?php echo $i;?></td>
					  	<td><?php echo $info->student_id;?><input type = "hidden" name ="studentID<?php echo $i;?>" value= "<?php echo $info->student_id;?>"></td>
					  			<td><?php echo $info->name;?><input type = "hidden" name ="studentName<?php echo $i;?>" value= "<?php echo $info->name;?>"></td>
					  			<td><?php echo $info->mobile;?><input type = "hidden" name ="studentMobile<?php echo $i;?>" value= "<?php echo $info->mobile;?>"></td>
					  			<td> <div class="form-group">			
									<label class="radio-inline">
										<input type="radio" class="grey" value="P" name="gender<?php echo $i; ?>" id="gender_female" checked="checked">
										p
									</label>
									<label class="radio-inline">
										<input type="radio" class="grey" value="A" name="gender<?php echo $i; ?>"  id="gender_male">
										A
									</label>
									<label class="radio-inline">
										<input type="radio" class="grey" value="L" name="gender<?php echo $i; ?>"  id="gender_male">
										L
									</label>
								</div></td>	
						</tr><?php 	$i++;												
					  	endforeach;
							  ?>
							</table>
							<input type="hidden" name ="rows" value ="<?php echo $i;?>" />
							</div><?php 
		  		}
 
	}
	function saveAttendance(){
		$instituteID=$this->input->post("instituteID");
		$selectBatch=$this->input->post("selectBatch");
		$selectCourse=$this->input->post("selectCourse");
			$i = $this->input->post("rows");
			for($j=1; $j<$i; $j++){
				$data = array(
						"s_no"=>$j,
						"student_id" => $this->input->post("studentID$j"),
						"name" => $this->input->post("studentName$j"),
						"mobile" => $this->input->post("studentMobile$j"),
						"branch_id" => $this->input->post("instituteID"),
						"attendance" => $this->input->post("gender$j"),
						"timing" => $this->input->post("selectBatch"),
						"courseApplied" => $this->input->post("selectCourse"),
						"date1" => date('Y-m-d')
				);
				$this->db->insert("attendance",$data);
			}
			redirect(base_url()."apanel/studentAttendance/AttendanceDone");
	}
	
	function studentAttenReport(){
		$instituteID = $this->input->post("instituteID");
		$selectBatch = $this->input->post("selectBatch");
		$selectCourse = $this->input->post("selectCourse");
		?>
				
		<div>
		<table>
		  <tr>
		    <th>Student Id</th>
		    <th>student Name</th>
		    <th>Mobile</th>
		    <th>Presenti</th>
		    <th>Date</th>
		  </tr>
		 
		  <?php $this->db->where("branch_id",$instituteID);
		  		$this->db->where("timing",$selectBatch);
		  		$this->db->where("courseApplied",$selectCourse);
		  		$var = $this->db->get("attendance");
		  		if($var->num_rows() > 0)
		  		{
		  			$i=1;
		  		foreach($var->result() as $atten):
		  		?>
		  		<tr>	<td><?php echo $atten->student_id;?></td>
		  		  			<td><?php echo $atten->name;?></td>
		  		  			<td><?php echo $atten->mobile;?></td>
		  		  			<td><?php echo $atten->attendance;?> </td>
		  		  			<td><?php echo $atten->date1;?> </td>	
		  			</tr><?php 	$i++;	
	
				endforeach;
		  		}
		  		else{
		  			echo "No Record Found For Given Date";
		  		}
		  		?>
		  		</table>
		  		</div><?php 
	}
}