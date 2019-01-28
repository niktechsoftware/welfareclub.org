<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<title>Result 2017</title>
		<meta charset="UTF-8" />
		
	</head>

<?php

                    
$rollNumber =	$this->uri->segment(3);
$this->db->where("student_id",$rollNumber);
$rate = $this->db->get("result");
if($rate->num_rows()>0)
{
	$rate1=$rate->row();
	if(strlen($rate1->student_id)>1){
		
	
?>
<div class="header-content" >
<table width="100%" border="2"  style="background-color: #DEFFD6;">
	<tr>
		<td colspan="3">
				<div class="logo">
					<h2>
						<a title="Post Graduate College" href="#">
							<img src="<?php echo base_url(); ?>assets/images/logopgc.jpg" alt="Post Graduate College" height="110" width="100%"><strong></strong>
						</a>
					</h2>			</div><!-- .logo /-->
				<div class="clear">
		</td>		
	</tr>
	<tr>
		
			<td colspan="3" align="center">
				
						<b> <font size='6'> PG College Entrance Exam Result -2017 </font></b>
								
		
		</td>
	</tr>
	<tr>
		
		<td>
			<b> <font size='4'>	 &nbsp;  Roll Number :-  &nbsp;<?php echo $rate1->student_id;?></font></b>
			
		</td>
		<td>
			
			<b> <font size='3'>&nbsp; &nbsp;Mark Obtained :- &nbsp;<?php echo $rate1->mark;?></font></b>
			
		</td>
	</tr>
	<tr>
		<td>
			<b> <font size='3'>&nbsp; &nbsp;Name :- &nbsp;<?php echo $rate1->student_name;?></font></b>
			
		</td>
		<td>
			<b> <font size='3'>&nbsp; &nbsp;Weightage :- &nbsp;<?php echo $rate1->weight;?></font></b>
			
		</td>
	</tr>
	<tr>
		<td>
			&nbsp; <b> <font size='3'>Father's Name :- &nbsp; <?php echo $rate1->father_name;?></font></b>
			
		</td>
		<td>
			<b> <font size='3'>&nbsp; &nbsp;Total Mark:- &nbsp;<?php echo $rate1->total_marks;?></font></b>
			
		</td>
	</tr>
	<tr>
		<td>
			<b> <font size='3'>&nbsp; &nbsp;Course :- &nbsp;<?php echo $rate1->course;?></font></b>
			
		</td>
		<td>
			<b> <font size='3'>&nbsp; &nbsp;General Rank :- &nbsp;<?php echo $rate1->g_rank;?></font></b>
			
		</td>
		
	</tr>
	<tr>
		<td>
			<b> <font size='3'>&nbsp; &nbsp;Category :- &nbsp;<?php echo $rate1->category;?></font></b>
			
		</td>
		<?php if( ($rate1->cate_rank) == 0){ ?>
		<td>
			<b> <font size='3'>&nbsp; &nbsp;Category Rank :- &nbsp; N/A</font></b>
			
		</td>
	  <?php }
		else
		{ ?>
		<td>
			<b> <font size='3'>&nbsp; &nbsp;Category Rank :- &nbsp;<?php echo $rate1->cate_rank;?></font></b>
			
		</td>
		
	<?php	}
		?>
	</tr>
	
	<tr>	
		<td colspan="3" align="left"><strong>Note:-</strong> ऐसे छात्र जो अपने परीक्षाफल से संतुष्ट नहीं हैं वे ऑनलाइन अपनी शिकायत महाविद्यालय की वेबसाइट पर दर्ज करा दें |</td>
	</tr>
	
	
</table>			
				
					
    
				
				</div>
				
			</div>
			<div class="invoice-buttons non-printable" align="center">
    	<button class="btn btn-default margin-right" type="button" onclick="window.print();" >
        	<i class="fa fa-print padding-right-sm"></i> Print Result
        </button>
       
    </div>
    <?php
    }else{
		echo "Record Not Found";
	}
	}
	?>	
			
			

    <script>
		jQuery(document).ready(function(){
			$("#plain").click(function(){
				$("#customer").css("padding-top", "0px");
				$("#headerP").attr('class', 'printcontent');
				window.print();
			});
		});
    </script>	
		
</body>
</html>			

   	