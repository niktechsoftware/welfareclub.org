<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<title>Admit Card</title>
		<meta charset="UTF-8" />
		
	</head>

<?php
 $courseArray = array("10"=>"B.A.", 
 		"21"=>"B.Sc. Biology", 
 		"22"=>"B.Sc. Maths", 
 		"23"=>"B.Sc. Agriculture", 
        "24"=>"B.Sc. Physical Education",
 		"25"=>"B.com.",
 		"31"=>"M.A. Hindi",
 		"32"=>"M.A. Sanskrit", 
        "33"=>"M.A. Sociology",
 		"34"=>"M.A. Medieval History",
 		"35"=>"M.A. Psychology",
 		"36"=>"M.A. Economics", 
        "37"=>"M.A. Political Science",
 		"38"=>"M.A. English",
 		"41"=>"M.Sc. Maths",
 		"42"=>"M.Sc. Botany", 
        "43"=>"M.Sc. Environmental Science",
 		"51"=>"M.Sc.(Agriculture) Genetics and Plant Breeding", 
        "52"=>"M.Sc.(Agriculture) Horticulture",
 		"0"=>"B.Ed.");
                    
$rollNumber=	$this->uri->segment(3);
$this->db->where("registration_number",$rollNumber);
$rate = $this->db->get("tbl_enrollment");
if($rate->num_rows()>0)
{
	$rate1=$rate->row();
	if(strlen($rate1->roll_number)>1){
		
	
?>
<div class="header-content">
<table width="100%" border="3">
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
				
						<b> <font size='6'> PG College Entrance Exam -2017 Admit Card </font></b>
								
		
		</td>
	</tr>
	<tr>
		<td rowspan="4" width="20%">
			<img src="http://pgcghazipur.co.in/exam/photo/<?php echo $rate1->photo;?>" alt="Post Graduate College" height="170" width="100%"><strong></strong>
		</td>
		<td>
			<b> <font size='4'>	 &nbsp;  Roll Number :-  &nbsp;<?php echo $rate1->roll_number;?></font></b>
			
		</td>
		<td>
			
			<b> <font size='3'>&nbsp; &nbsp;Registration Number :- &nbsp;<?php echo $rate1->registration_number;?></font></b>
			
		</td>
	</tr>
	<tr>
		<td>
			<b> <font size='3'>&nbsp; &nbsp;Name :- &nbsp;<?php echo $rate1->name;;?></font></b>
			
		</td>
		<td>
			<b> <font size='3'>&nbsp; &nbsp;Father Name :- &nbsp;<?php echo $rate1->father;?></font></b>
			
		</td>
	</tr>
	<tr>
		<td>
			&nbsp; &nbsp; <b> <font size='3'> Date Of Birth :- &nbsp;<?php echo date('d-m-Y', strtotime($rate1->dob));?></font></b>
			
		</td>
		<td>
			<b> <font size='3'>&nbsp; &nbsp;Category :- &nbsp;<?php echo $rate1->category;?></font></b>
			
		</td>
	</tr>
	<tr>
		<td>
			<b> <font size='3'>&nbsp; &nbsp;Subject :- &nbsp;<?php echo $courseArray[$rate1->course];?></font></b>
			
		</td>
		<td>
			<b> <font size='3'>&nbsp; &nbsp;Date & Time of Exam :- &nbsp;<?php 
			
			if($rate1->course=='25'){
			echo "01-07-2017 [11:00 - 01:00 PM]";
			}
			if($rate1->course=='36'){
				echo "18-07-2017 [11:00 - 01:00 PM]";
			}
			if($rate1->course=='32'){
				echo "18-07-2017 [03:00 - 05:00 PM]";
			}
			if($rate1->course=='37'){
				echo "19-07-2017 [11:00 - 01:00 PM]";
			}
			if($rate1->course=='35'){
				echo "19-07-2017 [03:00 - 05:00 PM]";
			}
			if($rate1->course=='21'){
				echo "20-07-2017 [11:00 - 01:00 PM]";
			}
			if($rate1->course=='31'){
				echo "20-07-2017 [11:00 - 01:00 PM]";
			}
			if($rate1->course=='23'){
				echo "20-07-2017 [03:00 - 05:00 PM]";
			}
			if($rate1->course=='34'){
				echo "20-07-2017 [03:00 - 05:00 PM]";
			}
			if($rate1->course=='24'){
				echo "21-07-2017 [11:00 - 01:00 PM] (लिखित परीक्षा ) <br> 21-07-2017 [11:00 - 01:00 PM] (शारीरिक दक्षता )";
			}
			if($rate1->course=='38'){
				echo "21-07-2017 [11:00 - 01:00 PM]";
			}
			if($rate1->course=='41'){
				echo "21-07-2017 [11:00 - 01:00 PM]";
			}
			
			if($rate1->course=='52'){
				echo "21-07-2017 [11:00 - 01:00 PM]";
			}
			if($rate1->course=='42'){
				echo "21-07-2017 [11:00 - 01:00 PM]";
			}
			if($rate1->course=='22'){
				echo "21-07-2017 [03:00 - 05:00 PM]";
			}
			if($rate1->course=='33'){
				echo "22-07-2017 [11:00 - 01:00 PM]";
			}
			if($rate1->course=='43'){
				echo "22-07-2017 [03:00 - 05:00 PM]";
			}
			if($rate1->course=='51'){
				echo "22-07-2017 [03:00 - 05:00 PM]";
			}
			if($rate1->course=='10'){
				$this->db->where("rollnumber",$rate1->roll_number);
				$tsn = $this->db->get("marange")->row();
				if($tsn->sno < '1301'){
				echo "18-07-2017 [11:00 - 01:00 PM]";
				}
				if(($tsn->sno > '1300')&&($tsn->sno < '2601')){
					echo "18-07-2017 [03:00 - 05:00 PM]";
				}
				if(($tsn->sno > '2600')&&($tsn->sno < '3901')){
					echo "19-07-2017 [11:00 - 01:00 PM]";
				}
				if($tsn->sno > '3900'){
					echo "19-07-2017 [03:00 - 05:00 PM]";
				}
				
			}
			
			?> </font></b>
			
		</td>
	</tr>
	
	
	<tr>
	<td  width="20%">
				<img src="http://pgcghazipur.co.in/exam/signature/<?php echo $rate1->signature;?>" alt="Post Graduate College" height="55" width="100%"><strong></strong>
		</td>
		<td><b> <font size='3'>&nbsp; Examination Centre:- PG College Ghazipur	</font></b></td>
		<td align="right">
			<img src="http://pgcghazipur.co.in/exam/admin/sign.jpg" alt="Post Graduate College" height="50" width="15%">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
			Principal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
			 PG College Ghazipur 
		</td>
	</tr>
	
	<tr>	
		<td colspan="3" align="left"> 1).परीक्षार्थी परीक्षा हेतु प्रवेश पत्र के साथ पहचान पत्र के रूप में मतदाता पहचान पत्र / ड्राइविंग लाइसेंस / पेन कार्ड या अन्य पहचान पत्र जिस में अभ्यर्थी का फोटो हो , का मूल पहचान पत्र परीक्षा दिवस में परीक्षा केंद्र में लाना अनिवार्य होगा।मूल पहचान पत्र के अभाव में परीक्षा केंद्र में प्रवेश नहीं दिया जायेगा। <br>
		2).परीक्षार्थी परीक्षा के दिन, परीक्षा से कम से कम आधा घंटा पहले तक अनिवार्यतः उपस्थित रहे, जिससे परीक्षार्थी का सत्यापन मूल पहचान पत्र से किया जा सके| <br>
		3).केलकुलेटर, मोबाईल फोन, अथवा कोई भी इलेक्ट्रानिक्स उपकरण/डिवाईस अपने साथ परीक्षा कक्ष में नहीं रखेगा।<br>
4).प्रवेश पत्र पर फोटो प्रिन्ट न होने अथवा स्पष्ट न होने की दशा में अभ्यर्थी दो पासपोर्ट साईज के फोटो अपने साथ लाएंगे।<br>
5).परीक्षा कक्ष में पर्स, पाऊच, स्कार्फ एवं इलेक्ट्रानिक्स सामग्री को ले जाया जाना पूर्णतः वर्जित है।</td>
	</tr>
	
</table>			
				
					
    
				
				</div>
				
			</div>
			<div class="invoice-buttons non-printable" align="center">
    	<button class="btn btn-default margin-right" type="button" onclick="window.print();" >
        	<i class="fa fa-print padding-right-sm"></i> Print Admit Card
        </button>
       
    </div>
	<?php 
	}else{
		echo "आप के द्वारा फॉर्म फीस अभी नही जमा की गई |अतः पहले फीस जमा करे |";
	}
	}
	else{ 
	echo "आप के द्वारा दिया गया रजिस्ट्रेशन नंबर सही नही है| कृपया पुनः प्रयास करें|";
	}?>	
			
			

    <script>
		jQuery(document).ready(function(){
			$("#plain").click(function(){
				$("#customer").css("padding-top", "0px");
				$("#headerP").attr('class', 'printcontent');
				window.print();
			});
		});
    </script>		