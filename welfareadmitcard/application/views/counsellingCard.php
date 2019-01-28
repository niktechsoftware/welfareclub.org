<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<title>PGC Ghazipur counselling card</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form.css" type="text/css" media="all" />
		<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <style>
            .subject{
                display:none;
                margin-left:20px;
                width:25%;
            }
            select{
                margin-bottom: 30px; 
            }
            .error{
                border: 1px solid #f00;
            }
        </style>
	</head>
	<body>
		<div class="background-cover"></div>
		<header id="theme-header" class="theme-header">
			<div class="top-nav">
				<span class="today-date"><strong><?php echo date("d-m-Y")."     ".date("l"); ?></strong></span>
			</div>
			<!-- .top-menu /-->
			<div class="header-content">
				<div class="logo">
					<h2>
						<a title="Post Graduate College" href="#">
							<img src="<?php echo base_url(); ?>assets/images/logopgc.jpg" alt="Post Graduate College"><strong>Post Graduate College Ghazipur</strong>
						</a>
					</h2>			</div><!-- .logo /-->
				<div class="clear"></div>
			</div>	
			<nav id="main-nav">
				<div class="container">
					<div class="main-menu">
						<ul id="menu-menu" class="menu">
							<li id="menu-item-423" class="menu-item  menu-item-type-custom  menu-item-object-custom  menu-item-home">
								<a href="<?php echo base_url(); ?>index.php/welcome/index">Home</a>
							</li>
							<li id="menu-item-516" class="menu-item  menu-item-type-post_type  menu-item-object-page  menu-item-has-children parent-list">
								<a href="#">GOVERNING COUNCIL <span class="sub-indicator"></span></a>
								<ul class="sub-menu" style="overflow: hidden; height: auto; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px; display: none;">
									<li id="menu-item-513" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">COUNCIL</a></li>
									<li id="menu-item-1368" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Message of Founder Secretary</a></li>
									<li id="menu-item-512" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">SECRETARY MESSAGE</a></li>
									<li id="menu-item-518" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">PRINCIPAL MESSAGE</a></li>
								</ul> <!--End Sub Menu-->
							</li>
							<li id="menu-item-458" class="menu-item  menu-item-type-post_type  menu-item-object-page  menu-item-has-children parent-list">
								<a href="#">FACULTY <span class="sub-indicator"></span></a>
								<ul class="sub-menu" style="overflow: hidden; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px; display: none;">
									<li id="menu-item-461" class="menu-item  menu-item-type-post_type  menu-item-object-page  menu-item-has-children parent-list">
										<a href="#">Faculty of Science <span class="sub-indicator"></span></a>
										<ul class="sub-menu" style="overflow: hidden; height: 215px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px; display: none;">
											<li id="menu-item-1281" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Mathematics</a></li>
											<li id="menu-item-1282" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Chemistry</a></li>
											<li id="menu-item-1283" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Physics</a></li>
											<li id="menu-item-1284" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Botany</a></li>
											<li id="menu-item-1285" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Zoology</a></li>
											<li id="menu-item-1286" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Environmental Secince</a></li>
										</ul> <!--End Sub Menu-->
									</li>
									<li id="menu-item-466" class="menu-item  menu-item-type-post_type  menu-item-object-page  menu-item-has-children parent-list"><a href="#">Faculty of Arts <span class="sub-indicator"></span></a>
										<ul class="sub-menu" style="overflow: hidden; height: auto; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px; display: none;">
											<li id="menu-item-1351" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of English</a></li>
											<li id="menu-item-1352" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Hindi</a></li>
											<li id="menu-item-1355" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Sanskrit</a></li>
											<li id="menu-item-1357" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Urdu</a></li>
											<li id="menu-item-1353" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of History (Medieval &amp; Modern)</a></li>
											<li id="menu-item-1354" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Political Science</a></li>
											<li id="menu-item-1356" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Sociology</a></li>
											<li id="menu-item-1346" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Home Science</a></li>
											<li id="menu-item-1347" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Music</a></li>
											<li id="menu-item-1348" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Economic</a></li>
											<li id="menu-item-1358" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Geography</a></li>
											<li id="menu-item-1349" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Defence and Strategic Sceince</a></li>
											<li id="menu-item-1350" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Psychology</a></li>
										</ul> <!--End Sub Menu-->
									</li>
									<li id="menu-item-469" class="menu-item  menu-item-type-post_type  menu-item-object-page  menu-item-has-children parent-list"><a href="#">FACULTY OF AGRICULTURE <span class="sub-indicator"></span></a>
										<ul class="sub-menu" style="overflow: hidden; height: 352.0618px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px; display: none;">
											<li id="menu-item-1345" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Genetics and Plant Breeding</a></li>
											<li id="menu-item-1336" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Agriculture Engineering</a></li>
											<li id="menu-item-1337" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Plant Pathology</a></li>
											<li id="menu-item-1338" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Entomology</a></li>
											<li id="menu-item-1339" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Animal Husbandry &amp; Dairy Secince</a></li>
											<li id="menu-item-1340" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Agronomy</a></li>
											<li id="menu-item-1341" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Agriculture Extention</a></li>
											<li id="menu-item-1342" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Agriculture Economics &amp; Statistics</a></li>
											<li id="menu-item-1343" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Agriculture Chemistry</a></li>
											<li id="menu-item-1344" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Department of Horticulture</a></li>
										</ul> <!--End Sub Menu-->
									</li>
									<li id="menu-item-472" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">FACULTY OF EDUCATION</a></li>
									<li id="menu-item-475" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">FACULTY OF COMMERCE</a></li>
								</ul> <!--End Sub Menu-->
							</li>
							<li id="menu-item-491" class="menu-item  menu-item-type-post_type  menu-item-object-page  menu-item-has-children parent-list"><a href="#">Courses <span class="sub-indicator"></span></a>
								<ul class="sub-menu" style="overflow: hidden; height: 101px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px; display: none;">
									<li id="menu-item-492" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">POST GRADUATE</a></li>
									<li id="menu-item-494" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">UNDER GRADUATE</a></li>
									<li id="menu-item-493" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">RESEARCH</a></li>
								</ul> <!--End Sub Menu-->
							</li>
							<li id="menu-item-511" class="menu-item  menu-item-type-post_type  menu-item-object-page  menu-item-has-children parent-list"><a href="#">ACADEMICS GUIDANCE <span class="sub-indicator"></span></a>
								<ul class="sub-menu" style="overflow: hidden; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px; display: none;">
									<li id="menu-item-515" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">GENERAL INFORMATION &amp; GUIDELINES</a></li>
									<li id="menu-item-517" class="menu-item  menu-item-type-post_type  menu-item-object-page  current-menu-item  page_item  page-item-499  current_page_item"><a href="#">IMPORTANT DATES</a></li>
									<li id="menu-item-514" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">FEE STRUCTURE</a></li>
								</ul> <!--End Sub Menu-->
							</li>
							<li id="menu-item-545" class="menu-item  menu-item-type-post_type  menu-item-object-page  menu-item-has-children parent-list">
								<a href="../indexc12f.html?page_id=519">CAMPUS FACILITY <span class="sub-indicator"></span></a>
								<ul class="sub-menu">
									<li id="menu-item-543" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">LIBRARY</a></li>
									<li id="menu-item-544" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">COMPUTER LAB</a></li>
									<li id="menu-item-542" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">HOSPITAL</a></li>
									<li id="menu-item-540" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">SPORTS &amp; GYM</a></li>
									<li id="menu-item-541" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">K.V.K</a></li>
									<li id="menu-item-539" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">N.C.C. &amp; N.S.S</a></li>
									<li id="menu-item-1184" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Rovers/Rangars</a></li>
									<li id="menu-item-538" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">CANTEEN</a></li>
									<li id="menu-item-537" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">OPEN &amp; DISTANCE LEARNING</a></li>
									<li id="menu-item-1204" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">Student Union</a></li>
								</ul> <!--End Sub Menu-->
							</li>
							<li id="menu-item-1201" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">IQAC</a></li>
							<li id="menu-item-551" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">ALUMNI</a></li>
							<li id="menu-item-550" class="menu-item  menu-item-type-post_type  menu-item-object-page"><a href="#">CONTACT</a></li>
						</ul>
					</nav>
		<!-- .main-nav /-->
		</header>
		
		<div class="breaking-news">
			<span>Notice Board</span>			
			<ul>
				<li><a href="#" title="राष्ट्रपति ने महाविद्यालय के छात्र पार्थ  को रोवर्स पुरस्कार से सम्मानित किया ">राष्ट्रपति ने महाविद्यालय के छात्र पार्थ को रोवर्स पुरस्कार से सम्मानित किया</a></li>				
			</ul>
		</div>
		
		<div id="main-content" class="container full-width">
			<div class="content">
				<div class="wrapper">
					<div class="form">
						<form method="post" action="<?php echo base_url(); ?>index.php/welcome/getCounsellingCard" id="step1">
                            <h2 style="text-align:center;font-weight:bold;">Counselling card - 2017</h2>
                                                        <div class="course-div" style="padding:40px;">
								<label>Roll Number</label>
								<input type="text" name="rollNo" value="" required>
                                <p><input type="submit" name="submit" value="Submit"></p>
<div >  <font size="4" color="red"> <?php
if($msg==9){

echo "आप के द्वारा दिया गया रोल नंबर सही नही है| कृपया पुनः प्रयास करें|";

}


?>


                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
        <script src="js/step1.js"></script>
		<script>
			$(function(){
				$('#main-nav ul > li > .mega-menu-block, #main-nav ul > li > ul, #main-nav ul > li > ul > li > ul, #main-nav ul > li > ul > li > ul> li > ul, .top-menu  ul > li > ul, .top-menu  ul > li > ul > li > ul, .top-menu  ul > li > ul > li > ul> li > ul ').parent('li').addClass('parent-list');
                $('.parent-list').find("a:first").append(' <span class="sub-indicator"></span>');
                
                $("#main-nav li , .top-menu li").each(function(){	
                    var $sublist = $(this).find('ul:first:not(.mega-menu-content ul.sub-menu), .mega-menu-block');		
                    $(this).hover(function(){	
                        $sublist.stop().css({overflow:"hidden", height:"auto", display:"none"}).slideDown(200, function(){
                            $(this).css({overflow:"visible", height:"auto"});
                        });	
                    },
                    function(){	
                        $sublist.stop().slideUp(200, function()	{	
                            $(this).css({overflow:"hidden", display:"none"});
                        });
                    });	
                });
			})
		</script>
</html>