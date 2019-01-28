$(document).ready(function(){
    $(".course").change(function(){
        $(".subject").hide();
        var course = $(this).val();
        if(course != ""){
            var id = "#"+course;
            $(id).show();
        }
    });
    
	$(".grade").change(function(){
		$('.subject').hide();
		var grade = $(this).val();
		if(grade != ""){
			$(".course").html('<option value="">Select Course</option>');
			if(grade == "graduate"){
				$('.course').append('<option value="ba">B.A.</option> \
                                    <option value="bcom">B.Com.</option> \
                                    <option value="bsc">B.Sc.</option> \									<option value="bsc-Physical Education">B.Sc. Physical Education</option> \
									');
				
				$('#other-text').hide();
				$('.course').show();
			}else if(grade == "post-graduation"){
				$(".course").append('<option value="ma">M.A.</option> \
                                    <option value="msc">M.Sc.</option>\
									<option value="msc-Agriculture">M.Sc (Agriculture)</option>');
				
				$('#other-text').hide();
				$('.course').show();
			}else{
				$('.course').hide();
				$('#other-text').show();
			}
		}else{
			$('.course').hide();
		}
	})
	
    $(".subject").change(function(){
        var val = $(this).val();
        if(val != ""){
            $(this).removeClass("error");
        }
    })
    
    $("input[type=submit]").click(function(event){
        var submit = 0;
        var course = $(".course").val();
		var grade = $(".grade").val();
		if(grade == "other"){
			var otherCourse = $("#other-text").val();
			if(otherCourse != ""){
				submit = 1;
			}else{
				$("#other-text").addClass("error");
			}
		}
		else{
			if(course == "ba" || course == "bcom" || course == "bed"){
				submit = 1;
			}else{
				var id = "#"+course;
				var subject = $(id).val();
				if(subject == ""){
					$(id).addClass("error");
				}else{
					submit = 1;
				}
			}
		}
		
        if(submit == 1){
            $("#step1").submit();
        }else{
            event.preventDefault();
        }
    })
})