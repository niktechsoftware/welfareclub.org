<?php $this->load->view("header");?>
    
    <section>
        <div class="section_inner" >
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="border:2px solid red;">

                            <div id='leftmenu'>
                                <ul>
                                    <li class='active'><h2 class="find-course__title"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Form Instruction</h2></li>
									<p>फॉर्म भरने से यह निर्यण अवश्य कर ले कि इस फॉर्म का चालान कौन से ब्रांच में आपको जमा करना सरल रहेगा | उसके बाद ही आप उस ब्रांच को चुने | क्योंकि फॉर्म उसी ब्रांच पे स्वीकृत किया जायेगा |
									</p>
                                   
                                </ul>
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 ineerbox" style="border:2px solid Green;">

                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="float:right;">
                                <div align="right" style="padding-top:15px;">
                                    <span class="crunch"><i class="fa fa-home" aria-hidden="true"></i></a></span>
                                    <span class="crunch"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <span class="crunch"><a href="#">Admission</a></span>
                                   
                                    <span class="crunch"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <span class="crunch"><a href="admission-form.html">Apply Now</a></span>
                                </div>
                            </div>
                            <h3 class="headline"><span>Apply for Admission</span></h3> <hr>
                            <h4 class="sub-head" style='margin: 0 0 10px 0;'>Post Details</h4>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                 <label style="color: blue; size:14px; margin-bottom: -15px;">Name Of the Post</label>
                                    <select class="wpcf7-form-control wpcf7-text Textbox-css rblcampus rbmand">
                                        <option selected="selected" value="0">--Select Post--</option>
                                        <option value="ComputerOperator">Computer Operator</option>
                                        <option value="peon">Peon</option>
                                    </select>
                                </div>

                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                <label style="color: blue; size:14px; margin-bottom: -15px;">Branch</label>
                                    <select class="wpcf7-form-control wpcf7-text Textbox-css rblinstitute rbmand">
                                        <option selected="selected" value="0">--Select Branch--</option>
										 <option value="1">Ghazipur</option>
                                        <option value="2">Bhabhua</option>
                                    </select>
                                </div>

                               
                            </div>

                            <h4 class="sub-head" style='margin: 0 0 10px 0;'>Personal Details</h4>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfname txtmand" name="name" placeholder="Name of Applicant *">
                                </div>

                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtlname txtmand"  placeholder="Fathers's Name *">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtmname txtmand" placeholder="Mothers's Name">
                                </div>
								<div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtmname txtmand" placeholder="Husband's Name">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                 <label style="color: blue; size:14px; margin-bottom: -15px;">Date Of Birth</label>
                                    <input type="date" class="wpcf7-form-control wpcf7-text Textbox-css txtmname txtmand" placeholder="Bate Of Birth">
                                </div>
                                 <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                  <label style="color: blue; size:14px; margin-bottom: -15px;">Age (In Year)</label>
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtmname txtmand" placeholder="Age (Year)">
                                </div>  
                            </div>
   							<div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrphnno txtmand" placeholder="Religion">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                               
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrofficeno txtmand" placeholder="Nationality">
                                </div>
                                
                            </div>
                          
                             <div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrphnno txtmand" placeholder="Education">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrofficeno txtmand" placeholder="Nominee Name">
                                </div>
                                
                            </div>
                            <h4 class="sub-head" style='margin: 0 0 10px 0;'>Contact Details</h4>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrphnno txtmand" placeholder="Residential / Correspondence Address *">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrofficeno txtmand" placeholder="City">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrphnno txtmand" placeholder="State">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrofficeno txtmand" placeholder="Pin Code">
                                </div>
                                
                            </div>
                          
                            <div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrphnno txtmand" placeholder="Mobile No1.">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrofficeno txtmand" placeholder="Mobile No.">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrphnno txtmand" placeholder="Email Id *">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrofficeno txtmand" placeholder="Teliphone No">
                                </div>
                                
                            </div>

                            <h4 class="sub-head" style='margin: 0 0 10px 0;'>Educational Details</h4>
                            <div class="row">
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqual1 txtmand" placeholder="Qualification">
                                </div>
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqyear1 txtmand" placeholder="Year">
                                </div>
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtuni1 txtmand" placeholder="Board University / Institution	">
                                </div>
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtsbjct1 txtmand" placeholder="Subjects">
                                </div>
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtper1 txtmand" placeholder="Percentage">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqual2 txtmand" placeholder="Qualification">
                                </div>
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqyear2 txtmand" placeholder="Year">
                                </div>
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtuni2 txtmand" placeholder="Board University / Institution	">
                                </div>
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtsbjct2 txtmand" placeholder="Subjects">
                                </div>
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtper2 txtmand" placeholder="Percentage">
                                </div>
                            </div>  <div class="row">
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqual3 txtmand" placeholder="Qualification">
                                </div>
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqyear3 txtmand" placeholder="Year">
                                </div>
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtuni3 txtmand" placeholder="Board University / Institution	">
                                </div>
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtsbjct3 txtmand" placeholder="Subjects">
                                </div>
                                <div class="col-xs-12 col-sm-2  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtper3 txtmand" placeholder="Percentage">
                                </div>
                            </div>
                             <h4 class="sub-head" style='margin: 0 0 10px 0;'>Upload Details</h4>
                            <table  border="2">
                            <tr>
                            <td>
                                 <label style="color: blue; size:10px; ">Photo</label>
                                    <input type="file" class="" placeholder="Photo *" style="width: 90%">
                               </td>
                             <td> 
                                 <label style="color: blue; size:10px;">Signature</label>
                                    <input type="file" class="" placeholder="Singnature" style="width: 90%">
                                </td>
                              <td>
                                 <label style="color: blue; size:10px; ">Id Proof</label>
                                    <input type="file" class="" placeholder="Singnature" style="width: 90%">
                                </td>
                            </tr>
                            </table>
                            
                          
                             <hr>
                            <h4 class="sub-head" style='margin: 0 0 10px 0;'>Declaration</h4>
                            <p class="format">
                                <input id="chkbxdec" type="checkbox" />
                                I declare that all the information furnished above by the undersigned is true to the best of my knowledge and nothing has been concealed therein.
                            </p>
                            <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                <button class="btncourses btn-primary btn-effect btnsubmit" style='margin: 6px 0; padding: 3px 15px;'>Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <!-- end section_mod-a__inner -->
            </div>
            <!-- end container -->
        </div>
    </section>
    <!-- Close Wrapper Content -->
   <?php $this->load->view("footer");?>