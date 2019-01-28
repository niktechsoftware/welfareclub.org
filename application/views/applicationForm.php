<?php $this->load->view("header");?>
<div class="banner_bg">
  
       <div class="rht_banner"><img src="<?php echo base_url();?>assets/images/subban/instruction.png" width="1115" height="300" alt="chairman" /></div>
 
</div>
<div id="wrapper">
  <div id="main">
    <div class="content">
      <div class="con_lft">&nbsp;</div>
      <div class="con_middle1">
        <form method="post" action="<?php echo base_url()?>index.php/registration/saveRegistration" enctype="multipart/form-data">
        <div style="float:left; width:50%; padding-right:10%;">
          <h1>Application Form</h1><hr /><br /><style type="text/css">
          table tr td{padding: 5px;
         
          }
          </style>
             <table width="100%">
          <tr>
            <td>छात्र/छात्रा का नाम (हिंदी में) </td>
            <td><input type="text" name="nameh" id="transliterateTextarea" style="height: 33px; width: 260px" required="required"></td>
          </tr>
           <tr>          
           <td>छात्र/छात्रा का नाम (अंग्रेजी के बड़े अक्षरों में )</td>
            <td><input type="text" name="namee" style="height: 33px; width: 260px" required="required"></td>
          </tr>
           <tr>
          <tr>          
           <td>पिता का नाम (अंग्रेजी के बड़े अक्षरों में) </td>
            <td><input type="text" name="fname" style="height: 33px; width: 260px" required="required"></td>
          </tr>
           <tr>
          
           <td>माता का नाम  (अंग्रेजी के बड़े अक्षरों में) </td>
            <td><input type="text" name="mname" style="height: 33px; width: 260px" required="required"></td>
          </tr>
         
         
          <tr>
          <td>जन्मतिथि</td>
          <td>
           <input type="date" name="dob" style="height: 33px; width: 260px" required="required">
           </td>
          </tr>
           <tr>
          <td>पता</td>
          <td>
          <textarea rows="4" cols="34" name="address">
          </textarea>
          
           </td>
          </tr>
          </tr>
          
           <td>मोबाइल नंबर</td>
            <td>
            <input type="text" name="mobile" style="height: 33px; width: 260px" required="required">
            </td>
          </tr>
         
        </table>
        
        </div>
        <div style="float:left; width:40%; padding-bottom:40px;">
        <h1>परीक्षा वर्ष :-     2017-2018 </h1>
          <table width="100%">
          <tr>
            <td>वर्ग  </td>
            <td>
             <select  name="varg" style="height: 33px; width: 260px" >
		                                      <option value="N/A"></option>
		                                      <option value="कनिष्ठ वर्ग">कनिष्ठ वर्ग</option>
		                                      <option value="ज्येष्ठ वर्ग">ज्येष्ठ वर्ग</option>
		                                      <option value="वरिष्ठ वर्ग">वरिष्ठ वर्ग</option>
	                                	</select>
            </td>
          </tr>
           <tr>          
           <td>प्रतियोगिता का विषय</td>
            <td>
            <select  name="subject" style="height: 33px; width: 260px" required="required" >
		                                      <option value="N/A"></option>
		                                      <option value="सामान्य ज्ञान">सामान्य ज्ञान</option>
		                                      <option value="गणित एवं तार्कित शक्ति"> गणित एवं तार्कित शक्ति</option>
		                                      <option value="निबंध ">निबंध </option>
		                                       <option value="चित्रकला "> चित्रकला  </option>
		                                        <option value="वाद -विवाद ">वाद -विवाद</option>
		                                          <option value="गायन">गायन </option>
		                                           <option value="नृत्य ">नृत्य  </option>
	                                	</select>
            </td>
          </tr>
           <tr>
          <tr>          
           <td>क्या आप शारीरिक विकलांग है </td>
            <td>
            <select  name="disability" style="height: 33px; width: 260px" required="required" >
		                                      <option value="N/A"></option>
		                                      <option value="हाँ ">हाँ </option>
		                                      <option value="नहीं ">नहीं </option>
	                                	</select>
            </td>
          </tr>
           <tr>
          
           <td>विद्यालय का नाम (पूरा पता सहित )</td>
            <td>
             <textarea rows="4" cols="34" name="schoolname" required="required">
          </textarea>
            </td>
          </tr>
         
         
          <tr>
          <td>कक्षा</td>
          <td>
           <input type="text" name="class" style="height: 33px; width: 260px" required="required">
           </td>
          </tr>
           <tr>
          <td>छात्र/छात्रा की फोटो</td>
          <td>
           <input type="file" name="student_photo" style="height: 33px; width: 260px" required="required">
           </td>
          </tr>
          </tr>
          
           <td>छात्र/छात्रा का हस्ताक्षर </td>
            <td>
             <input type="file" name="student_sign" style="height: 33px; width: 260px" required="required">
            </td>
          </tr>
          </tr>
          
           <td>अभिभावक का हस्ताक्षर </td>
            <td>
             <input type="file" name="guardian_sign" style="height: 33px; width: 260px" required="required">
            </td>
          </tr>
         
        </table>
      
        </div><br>
        <h3 class="sub-head" style='margin: 0 0 10px 0;'>Declaration</h3>
                            <p class="format">
                                <input id="chkbxdec" type="checkbox" required="required"/>
                                I declare that all the information furnished above by the undersigned is true to the best of my knowledge and nothing has been concealed therein.
                            </p>
        <hr>
         <div align="center">
                                <button class="btncourses btn-primary btn-effect btnsubmit" style='margin: 6px 0; padding: 3px 15px;'>Submit</button>
                            </div>
      </div>
    </div>
  </div>
</div>
</form>

<iframe src="<?php echo base_url();?>assets/iframe_footer.html" width="100%" height="300px" marginwidth="0" marginheight="0" frameborder="0" scrolling="no"></iframe>
</body>
<script type="text/javascript" src="https://www.google.com/jsapi">
    </script>
    <script type="text/javascript">

      // Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });

      function onLoad() {
        var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.HINDI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };

        // Create an instance on TransliterationControl with the required
        // options.
        var control =
            new google.elements.transliteration.TransliterationControl(options);

        // Enable transliteration in the textbox with id
        // 'transliterateTextarea'.
        control.makeTransliteratable(['transliterateTextarea']);
		control.makeTransliteratable(['transliterateTextarea1']);
		control.makeTransliteratable(['transliterateTextarea2']);		
      }
      google.setOnLoadCallback(onLoad);
    </script>
</html>
