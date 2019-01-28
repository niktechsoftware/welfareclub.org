<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

<title><?php echo "JMD"; ?></title>

	<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/invoice_css/style.css' />
	<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/invoice_css/prin_result.css' media="print" />
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/invoice_js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/invoice_js/example.js'></script>
	
	<style type="text/css">

	@media print
	{
			body * { visibility: hidden; }
			#printcontent * { visibility: visible; }
			#printcontent { position: absolute; top: 10px; left: 30px; }
	    }
    .nob{
    	border: none;
    }
	</style>
	
   
</head>

<body>
	<div id="printcontent" align="center">
	
	<div id="page-wrap" style="width:820px; border: 1px solid black; outline: 1px solid black; solid #333;">
<?php
	
	$this->db->where("form_no",$registration);
	$pInfo = $this->db->get("registration")->row();
?>		

		<table style="width:100%;">
		<tr>
		<td>
			<tr>
				
				<td style="border:none; line-height: 30px;">
					<img alt="" class="has-retina" src="<?php echo base_url();?>assets/images/recieptlogo.jpg"> <br>
					<p style="text-align:center; letter-spacing : 1px; font-size:40px; " >
						<font size="6">Student Registration Form</font><br>
						
			       
				</td>
			</tr>
			
			<td> <table> 
          
                     <tr>
                    	<td style="border:none; line-height: 15px;">
                        	
				  		<h3>Date  : <strong><?php echo date("d-m-Y"); ?></strong>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
				  		
                        </td>
                        <td><strong>Time:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php date_default_timezone_set('Asia/Kolkata');
echo date('H:i'); ?></strong> </td>
                    </tr>
            </table></td>
			
				
			
		<tr>
		<td>	
        <hr/>
		
		
		<div id="customer">
        	<div style="display:inline-block; float:left; margin-left:5px;">
           
			</div>
			
			
			<div style="display:inline-block; float:right; margin-right:5px;">
          <table id="items" align="center"  style="width:100%; margin-top:0px; alignment-adjust:central;"> 
      <tbody>
<tr>
<td><img  height="115" width="110" src="<?php echo base_url()?>assets/photo/<?php echo $pInfo->student_photo;?>" /><br></br><b>Student Photo</b></td>
<td><img  height="115" width="110" src="<?php echo base_url()?>assets/studentsign/<?php echo $pInfo->student_sign;?>" /><br></br><b>Student Signature</b></td>
<td><img  height="115" width="110" src="<?php echo base_url()?>assets/guardiansign/<?php echo $pInfo->guardian_sign;?>" /><br></br><b>Gaurdian Signature</b></td>
</tr>

</tbody>	</table>
<hr></hr>
			<table id="items" align="center"  style="width:100%; margin-top:0px; alignment-adjust:central;">
				
					<tbody>
						<tr>
						<td style="width: 60%"> Form Number :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->form_no;?></td> <td style="width: 40%">जन्मतिथि:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->dob;?></td>
					
						</tr>
						<tr>
						<td> छात्र/छात्रा का नाम (हिंदी में) :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->student_name_hin;?></td> <td> वर्ग :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->varg;?></td>
					
						</tr><tr>
						<td> छात्र/छात्रा का नाम (अंग्रेजी में ) :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->student_name_eng;?></td> <td>प्रतियोगिता का विषय :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->subject;?></td>
					
						</tr>
						<tr>
						<td> पिता का नाम (अंग्रेजी के बड़े अक्षरों में) :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->	father_name;?></td><td>क्या आप शारीरिक विकलांग है:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->disability;?></td>
					
						</tr>

						<tr>
						<td> माता का नाम  (अंग्रेजी के बड़े अक्षरों में) :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->mother_name;?></td><td> कक्षा :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->class;?></td>
					
					
					
					</tbody>
                        <tr><td><h4>पता:- <?php echo $pInfo->	student_address;?></h4> </td><td><h4>विद्यालय का नाम (पूरा पता सहित ):-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->school_addres;?> </h4></td><tr>
			</table>

	</div>
	
	</div>
	</td>
	</tr>
        <tbody>
<tr>
<?php if( ($pInfo->subject=="गायन"))
{ ?>
	<td><strong>1:-</strong>अपने फॉर्म के साथ क्लब की प्रधान कार्यालय पीरनगर पे Rs. 100/- शुल्क जमा कराएं | </td>
<?php }
elseif(($pInfo->subject=="नृत्य"))
{
	?>
<td><strong>1:-</strong>अपने फॉर्म के साथ क्लब की प्रधान कार्यालय पीरनगर पे Rs. 130/- शुल्क जमा कराएं | </td>
<?php }
else
{
?>
<td><strong>1:-</strong>अपने फॉर्म के साथ क्लब की प्रधान कार्यालय पीरनगर पे Rs. 80/- शुल्क जमा कराएं | </td>
<?php }?>
</tr>
</tbody>

		</table>


</div>



</div>
	<br>
	<div class="invoice-buttons">
    	<button class="btn btn-default margin-right" type="button" onclick="window.print();" >
        	<i class="fa fa-print padding-right-sm"></i> <b>Print Reciept</b>
        </button>
    </div>
</body>

</html>