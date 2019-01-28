 		<script src="<?php echo base_url()?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/classie/classie.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/summernote-master/summernote.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="<?php echo base_url()?>assets/js/modern.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/pages/form-elements.js"></script>
        
        <script>
        jQuery(document).ready(function() {
        	$("#sonu").hide();
        	var instituteID = $("#instituteID").val();
			var selectBatch = $("#selectBatch").val();
            $("#selectCourse").change(function(){
                
				var instituteID = $("#instituteID").val();
				var selectBatch = $("#selectBatch").val();
				if(instituteID=="empty"){alert("First Select Institute ID");}
				if(selectBatch=="empty"){alert("Please Select Institute Batch Timing");}
				var selectCourse = $("#selectCourse").val();
			$.post("<?php echo site_url("attenController/studentAtten") ?>",{instituteID : instituteID, selectBatch : selectBatch, selectCourse : selectCourse}, function(data){
				$("#sample_rahul1").html(data);
				$("#sonu").show();
					});
			
					
            });


			Main.init();
			SVExamples.init();
			FormElements.init();
			TableExport.init();
			UIModals.init();	
			
		});
        </script>