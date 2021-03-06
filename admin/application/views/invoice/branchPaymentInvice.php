<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Fee Invoice</title>

	<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/invoice_css/style.css' />
	<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/invoice_css/print.css' media="print" />
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/invoice_js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/invoice_js/example.js'></script>
	
	<style type="text/css">

	@media print
	{
			body * { visibility: hidden; }
			#printcontent * { visibility: visible; }
			#printcontent { position: absolute; top: 40px; left: 30px; }
	    }
	</style>
	
    <script>
        function convert_number(number)
        {
            if ((number < 0) || (number > 999999999))
            {
                return "Number is out of range";
            }
            var Gn = Math.floor(number / 10000000);  /* Crore */
            number -= Gn * 10000000;
            var kn = Math.floor(number / 100000);     /* lakhs */
            number -= kn * 100000;
            var Hn = Math.floor(number / 1000);      /* thousand */
            number -= Hn * 1000;
            var Dn = Math.floor(number / 100);       /* Tens (deca) */
            number = number % 100;               /* Ones */
            var tn= Math.floor(number / 10);
            var one=Math.floor(number % 10);
            var res = "";

            if (Gn>0){
                res += (convert_number(Gn) + " Crore");
            }
            if (kn>0){
                res += (((res=="") ? "" : " ") +
                    convert_number(kn) + " Lakhs");
            }
            if (Hn>0){
                res += (((res=="") ? "" : " ") +
                    convert_number(Hn) + " Thousand");
            }

            if (Dn){
                res += (((res=="") ? "" : " ") +
                    convert_number(Dn) + " hundred");
            }


            var ones = Array("", "One", "Two", "Three", "Four", "Five", "Six","Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen","Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen","Nineteen");
            var tens = Array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty","Seventy", "Eigthy", "Ninety");

            if (tn>0 || one>0)
            {
                if (!(res==""))
                {
                    res += " and ";
                }
                if (tn < 2)
                {
                    res += ones[tn * 10 + one];
                }
                else
                {

                    res += tens[tn];
                    if (one>0)
                    {
                        res += ("-" + ones[one]);
                    }
                }
            }

            if (res=="")
            {
                res = "zero";
            }
            return res;
        }

    </script>
</head>

<body>
	<div id="printcontent">
		<div id="page-wrap" style="border:1px solid #333;">
		<?php 
				$this->db->where("clinic_id",$this->uri->segment(3));
				$rowc = $this->db->get("general_settings")->row();
				
				$this->db->where("invoice_no",$this->uri->segment(4));
				$rowb = $this->db->get("branchform")->row();
			?>
	<?php 
		$id = 10001;
		$school_info = mysql_query("SELECT * FROM general_settings WHERE clinic_id = '$id'");
		$info = mysql_fetch_object($school_info);
	?>		
			<table style="width: 100%">
				<tr>
					<td width="10%" style="border: none;">
						<img src="<?php echo base_url();?>assets/images/docImg/1441523940aaa.png" alt="" width="100" />
					</td>
					<td style="border: none;">
						<h1 align="center" style="text-transform:uppercase;"><?php echo $info->cilnic_name; ?></h1>
				        <h3 align="center" style="font-variant:small-caps;">
							<?php echo $info->address_1." ".$info->address_2." ".$info->city; ?>
				        </h3>
				        <h3 align="center" style="font-variant:small-caps;">
							<?php echo $info->state." - ".$info->pin; ?>
				        </h3>
				        <h3 align="center" style="font-variant:small-caps;">
							<?php if(strlen($info->phone_number > 0 )){echo "Phone : ".$info->phone_number.", ";} ?>
				            <?php echo "Mobile : ".$info->mobile_number; ?>
				        </h3>
					</td>
				</tr>
			</table>
			<div style="clear:both"></div>
			<hr/><br/>
			<div id="customer">
	            <table width="100%"> 
	                    <tr>
	                    	<td style="width:30%; line-height: 18px; text-align: right; padding-right:50px;">
	                    		Branch Id : 
	                        </td>
	                        <td style="width:50%; line-height: 18px;">
	                    		<strong><?php echo $rowb->branchId; ?></strong>
	                        </td>
	                       
	                    </tr>
	                    
	                    <tr>
	                    	<td style="width:30%; line-height: 18px; text-align: right; padding-right:50px;">
	                    		Branch Name : 
	                        </td>
	                        <td style="width:50%; line-height: 18px;">
	                    		<strong><?php echo $rowc->username; ?></strong>
	                        </td>
	                       
	                    </tr>
	                    <tr>
	                    	<td style="width:30%; line-height: 18px; text-align: right; padding-right:50px;">
	                    		Contact No : 
	                        </td>
	                        <td style="width:50%; line-height: 18px;">
	                    		<strong><?php echo $rowc->mobile_number; ?></strong>
	                        </td>
	                       
	                    </tr>
	                   
	                    <tr>
	                    	<td style="line-height: 18px; text-align: right; padding-right:50px;">
	                    		 Number of Form :
	                        </td>
	                        <td style="line-height: 18px;">
	                    		 <strong><?php echo $rowb->noOfForm; ?></strong>
	                        </td>
	                    </tr>
	                    
	                  
	                  
	                    <tr>
	                    	<td style="line-height: 18px; text-align: right; padding-right:50px;">
	                    		<?php echo 'Balance :';	?>
	                        </td>
	                        <td colspan="2" style="line-height: 18px;">
	                    		<?php echo '<strong>'.$rowb->balance.'</strong>';	?>
	                        </td>
	                    </tr>
	                    <tr>
	                    	<td style="line-height: 18px; text-align: right; padding-right:50px;">
	                    		<?php echo 'Net Amount Paid :';	?>
	                        </td>
	                        <td colspan="2" style="line-height: 18px;">
	                    		<?php echo '<strong>'.$rowb->payBalance.'</strong>';	?>
	                        </td>
	                    </tr>
	                    <tr>
	                    	<td style="text-align: right; padding-right:50px;">
                                  <strong>Net Amount Paid (in words)</strong>
                            </td>
                            <td colspan="2">
                                  <script> document.write(convert_number(<?php echo $rowb->payBalance; ?>)); </script> Rupee Only/-
                            </td>
	                    </tr>
	                    <tr>
	                    	<td style="line-height: 18px; text-align: right; padding-right:50px;">
	                    		<?php echo 'Total Due :';	?>
	                        </td>
	                        <td colspan="2" style="line-height: 18px;">
	                    		<?php echo '<strong>'.$rowb->previousBalance.'</strong>';	?>
	                        </td>
	                    </tr>
	                     <tr>
	                    	<td style="text-align: right; padding-right:50px;">
                                  <strong>Net Amount Due (in words)</strong>
                            </td>
                            <td colspan="2">
                                  <script> document.write(convert_number(<?php echo $rowb->previousBalance; ?>)); </script> Rupee Only/-
                            </td>
	                    </tr>
	                      <tr>
	                    	<td style="line-height: 18px; text-align: right; padding-right:50px;">
	                    		<?php echo 'Invoice No :';	?>
	                        </td>
	                        <td colspan="2" style="line-height: 18px;">
	                    		<?php echo '<strong>'.$rowb->invoice_no.'</strong>';	?>
	                        </td>
	                    </tr>
	            </table>
	            <br/><br/><br/>
	            <table width="100%"> 
                    <tr>
                    	<td style="border:none; line-height: 8px; text-align:center;">
                    		 <strong>Branch's Signature</strong>
                        </td>
                        <td style="border:none; line-height: 8px; text-align:center;">
                    		 <strong><?php echo $info->cilnic_name; ?></strong>
                        </td>
                    </tr>
	            </table>
	            <br/><br/>
			</div>
		</div>
	</div>
	<br/><br/>
	<div class="invoice-buttons">
    	<button class="btn btn-default margin-right" type="button" onclick="window.print();" >
        	<i class="fa fa-print padding-right-sm"></i> Print Reciept
        </button>
    </div>
</body>

</html>