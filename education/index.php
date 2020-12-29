<?php 
include('../db_connect.php');

$queryInfrastructure = "SELECT * FROM `status_of_infrastructure`";

$stmtInfrastructure = mysqli_prepare($con, $queryInfrastructure);
mysqli_stmt_bind_param($stmtInfrastructure);
mysqli_stmt_execute($stmtInfrastructure);
$resultInfrastructure = mysqli_stmt_get_result($stmtInfrastructure);
//echo"<pre>";print_r($row);die;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDISE+</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Goole Font -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">    
    <link rel="stylesheet" href="css/assets/flaticon.css">
    <link rel="stylesheet" href="css/assets/magnific-popup.css">    
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/assets/owl.carousel.css">
    <link rel="stylesheet" href="css/assets/owl.theme.css">     
    <link rel="stylesheet" href="css/assets/animate.css"> 
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="css/assets/slick.css">  
    <link rel="stylesheet" href="css/assets/preloader.css"/>    

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="css/assets/revolution/layers.css">
    <link rel="stylesheet" href="css/assets/revolution/navigation.css">
    <link rel="stylesheet" href="css/assets/revolution/settings.css">    
    <!-- Mean Menu-->
    <link rel="stylesheet" href="css/assets/meanmenu.css">
    <!-- main style-->
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/demo.css">
   

</head>
<body>
<header class="header_four">
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>    
    

    <div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
                <div class="name">
			   <h1><a href="https://mhrd.gov.in/Dashboard/index.html" title="">Department of School Education &amp; Literacy<br>
				<span>Ministry of Human Resource Development<br>
				Government of India</span></a>
			  </h1>
			</div>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu dashHead">
                        School Education Dashboard
                    </ul>
                </div>
                <div class="mr-auto search_area ">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><i class="search_btn flaticon-magnifier"></i>
                            <div id="search">
                                <button type="button" class="close">×</button>
                                 <form>
                                     <input type="search" value="" placeholder="Search here...."  required/>
                                 </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav><!-- END NAVBAR -->
        </div> 
    </div>


    <!--==================
        Slider
    ===================-->
    <div class="rev_slider_wrapper">
        <div id="rev_slider_1" class="rev_slider">
            <ul>
                <li data-index="rs-1706" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <div class="slider-overlay"></div>
                    <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                    <img src="images/banner/banner-1920.jpg" alt="Sky" class="rev-slidebg"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption font-lora sfb tp-resizeme letter-space-5 h-p" 
                        data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-200','-280','-250','-200']" 
                        data-fontsize="['20','40','40','28']"
                        data-lineheight="['70','80','70','70']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":400,"to":"o:1;","delay":100,"split":"chars","splitdelay":0.05,"ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

                        style="z-index: 7; color:#fff; font-family:'Rubik', sans-serif; max-width: auto; max-height: auto; white-space: nowrap; font-weight:500;">Department of School Education & Literacy
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption NotGeneric-Title   tp-resizeme" 
                        id="slide-3045-layer-1" 
                        data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-120','-140','-140','-120']" 
                        data-fontsize="['40','95','75','45']"
                        data-lineheight="['40','95','75','45']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 5; font-family:'Roboto', sans-serif; font-weight: 900; white-space: nowrap;text-transform:left;">Ministry of Human Resource Development
                    </div>

                   <!-- LAYER NR.3 -->
                    <div class="tp-caption NotGeneric-Title   tp-resizeme" 
                        id="slide-3045-layer-1" 
                        data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-40','0','-10','-40']" 
                        data-fontsize="['40','95','75','45']"
                        data-lineheight="['70','120','70','70']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 5; font-family:'Roboto', sans-serif; font-weight: 900; white-space: nowrap;text-transform:left;">Government of India
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption rev-btn rev-btn left_btn" 
                        id="slide-2939-layer-8" 
                        data-x="['left','left','left','left']" data-hoffset="['0','500','420','280']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['75','220','190','100']" 
                        data-fontsize="['14','14','10','8']"
                        data-lineheight="['34','34','30','20']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="button" 
                        data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                        data-responsive_offset="on" 
                        data-responsive="off"
                        data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#ffffff;bg:#ff5a2c;bw:2px 2px 2px 2px;"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[12,12,8,8]"
                        data-paddingright="[40,40,30,25]"
                        data-paddingbottom="[12,12,8,8]"
                        data-paddingleft="[40,40,30,25]"

                        style="z-index: 14; white-space: nowrap; font-weight: 500; color: #ffffff;font-family:Rubik; text-transform:uppercase; background-color:#ff5a2c; border-color:rgba(0, 0, 0, 1.00); border-width:2px;  border-radius: 3px;">ALL INDIA AT A GLANCE
                    </div>
                    
                </li>

            </ul><!-- END SLIDES LIST -->
        </div><!-- END SLIDER CONTAINER -->
    </div><!-- END SLIDER CONTAINER WRAPPER -->
</header> <!--  End header section-->



<section class="login_signup_option">
    <div class="l-modal is-hidden--off-flow js-modal-shopify">
        <div class="l-modal__shadow js-modal-hide"></div>
        <div class="login_popup login_modal_body">
            <div class="Popup_title d-flex justify-content-between">
                <h2 class="hidden">&nbsp;</h2>
                <!-- Nav tabs -->
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12 login_option_btn">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#login" role="tab">Login</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Register</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Login-->
                            <div class="tab-pane fade in show active" id="login" role="tabpanel">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                            <a href="forgot-password.html" title="" class="forget_pass">Forget Password ?</a>
                                            <button type="submit" class="btn btn-default login_btn">Login</button>
                                        </div> 
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="social_login">
                                                <div class="social_items">
                                                    <button class="google_login google">Login Google</button>
                                                    <button class="google_login facebook">Login Facebook</button>
                                                    <button class="google_login twitter">Login Twitter</button>
                                                    <button class="google_login linkdin">Login Linkdin</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel2" role="tabpanel">
                                <form action="#" class="register">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>                                        
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                            <button type="submit" class="btn btn-default login_btn">Register</button>
                                        </div> 
                                    </div>
                                </form>
                            </div><!--/.Panel 2-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  <!-- End Login Signup Option -->





<section class="cources_highlight">
    <div class="container">
	<nav class="seDashboardNav">
        <ul class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
			<li class="active"><a class="nav-item nav-link active homecount" onclick="AllIndiaSectionFunction('all')" id="nav-home-tab" data-toggle="tab" href="#serviceSection" role="tab" aria-controls="nav-home" aria-selected="true"><img src="images/icons/icon_india_figure.png" alt="School"><br>All India Figures</a></li>

			<li><a class="nav-item nav-link" onclick="AllIndiaSectionFunction('state')" id="nav-contact-tab" data-toggle="tab" href="#serviceSectionstates" role="tab" aria-controls="nav-contact" aria-selected="true"><img src="images/icons/icon_state.png" alt="State Profile"><br>States and UTs </a></li>

            <li><a class="nav-item nav-link" onclick="AllIndiaSectionFunction('schemes')" id="nav-profile-tab" data-toggle="tab" href="#serviceSectionSchemes" role="tab" aria-controls="nav-contact" aria-selected="true"><img src="images/icons/icon_scheme.png" alt="State Profile"><br>Schemes </a></li>
			
			<li><a class="nav-item nav-link" onclick="AllIndiaSectionFunction('autonomous')" id="nav-contact-tab1" data-toggle="tab" href="#serviceSectionAutonomous" role="tab" aria-controls="nav-contact" aria-selected="true"><img src="images/icons/icon_autonomous.png" alt="State Profile"><br>Autonomous Bodies </a></li>
        </ul>
	</nav>
	</div>
	</section>
<div id="allIndiaFigures">
	
</div>
<section class="popular_courses">
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h3 class="hdngBrkrDiv" style="color:#000!important;text-transform: uppercase;font-size:23px;">Category wise Total Enrolment by Gender</h3>  
                </div><!-- ends: .section-header -->
            </div>

            <div class="col-12 col-sm-6 col-md-12 col-lg-12">
                <div class="single-courses">
               <div id="chartdivCategory"></div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

                         
        </div>

    </div>
</section><!-- ./ End Courses Area section -->


<section class="about_top_wrapper">
    <div class="container">            
        <div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h3 class="hdngBrkrDiv" style="color:#000!important;text-transform: uppercase;font-size:23px;">STATUS OF INFRASTRUCTURE IN SCHOOLS (MANAGEMENT WISE)</h3>  
                </div><!-- ends: .section-header -->
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

            <div id="testimonial-slider" class="owl-carousel" style="margin-top: 4%;">
               <?php while($rowInfrastructure=mysqli_fetch_assoc($resultInfrastructure)){?>
                <div onclick="DrinkingWaterPercentage(<?php echo $rowInfrastructure['id'];?>)" class="testimonial-item equal-height style-6" style="height: 100px;color:#fff;background-color:<?php echo $rowInfrastructure['color'];?>;cursor: pointer;">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo $rowInfrastructure['image'];?>" alt="<?php echo $rowInfrastructure['name'];?>">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name"><?php echo $rowInfrastructure['name'];?>
                        </div>
                    </div>
                </div>
               <?php }?>
            </div>
        </div>
            </div>
        </div>
</section><!-- End about_top_wrapper -->



<section class="events-area">
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h3 class="hdngBrkrDiv" style="color:#000!important;text-transform: uppercase;font-size:23px;">Percentage of Schools</h3>  
                </div><!-- ends: .section-header -->
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="single-courses">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<div id="chartdivPercentage"></div>


                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

                         
        </div>

    </div>
</section><!-- ./ End Events Area section -->


<footer>
    <div class="container">
        <div class="container-fluid" style="float:left;width:100%;">
 <div class="footerWrap">
   <div class="row">
     <div class="col-md-2 col-sm-2 col-xs-2">
       <ul class="footLink">
         <!--<li><h3 class="noTopMar">Main Links</h3></li>-->
         <li><a href="https://mhrd.gov.in/" target="_blank" title=""><span>MHRD</span></a></li>
         <li><a href="http://seshagun.gov.in/" target="_blank" title=""><span>SE Shagun</span></a></li>
         <li><a href="http://udiseplus.gov.in/" target="_blank" title=""><span>UDISE+</span></a></li>
         <li><a href="https://repository.seshagun.nic.in/" target="_blank" title=""><span>Repository</span></a></li>
         <li><a href="https://schoolgis.nic.in/" target="_blank" title="">School GIS</a></li>
         <li><a href="http://samagra.mhrd.gov.in/" target="_blank" title="">Samagra Shiksha</a></li>
       </ul>
     </div>
     <div class="col-md-6 col-sm-6 col-xs-12" style="text-align:center;"> 
     	<a href="https://gandhi.gov.in/" target="_blank" title=""><img src="images/logos/150yr-logo.png" alt=""></a>
     </div>
     <div class="col-md-4 col-sm-4 col-xs-12">
       <img src="images/logos/nic-logo.png" width="152" height="29" alt="">
       <p class="cpyTxt">This site is designed, hosted and maintained by National Informatics Centre (NIC), Department of Electronics &amp; Information Technology, Ministry of Communications &amp; Information Technology,
       Government of India.</p>
     </div>
   </div>
 </div>
</div>
    </div>
</footer><!-- End Footer -->

<section id="scroll-top" class="scroll-top">
    <h2 class="disabled">Scroll to top</h2>
    <div class="to-top pos-rtive">
        <a href="#"><i class = "flaticon-right-arrow"></i></a>
    </div>
</section>

    <!-- JavaScript -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Revolution Slider -->
    <script src="js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
    <script src="js/assets/revolution/jquery.themepunch.tools.min.js"></script> 
    <script src="js/jquery.magnific-popup.min.js"></script>     
    <script src="js/owl.carousel.min.js"></script>   
    <script src="js/slick.min.js"></script>   
    <script src="js/jquery.meanmenu.min.js"></script>  
    <!-- Counter Script -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/wow.min.js"></script> 
    <!-- Revolution Extensions -->
    <script src="js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
    <script src="js/assets/revolution/revolution.js"></script>
    <script src="js/custom.js"></script> 


    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    <script type="text/javascript" src="js/demo.js"></script>
    <div class="demo-style-switch" id="switch-style">
        <div class="switched-options">
            <div class="config-title">
                <a class="navbar-brand" href="index-3.html"><img src="images/logo.png" alt="logo"></a>
                <p>Education Template</p>
                
            </div>
            <div class="demos">
                <div><a href="index-3.html" data-toggle="tooltip" data-placement="top" title="Home Style One"><img class="main-image img-fluid" src="demo/index_1.png" alt=""/></a></div>
                <div><a href="index-3.html" data-toggle="tooltip" data-placement="top" title="Home Style Two"><img class="main-image img-fluid" src="demo/index_2.png" alt=""/></a></div>
                <ul class="list-unstyled clearfix">
                    <li><a href="about.html" data-toggle="tooltip" data-placement="top" title="About Page"><img src="demo/about.png" alt="" class="img-fluid"></a></li>
                    <li><a href="blog.html" data-toggle="tooltip" data-placement="top" title="Blog Page"><img src="demo/blog.png" alt="" class="img-fluid"></a></li>
                    <li><a href="blog-details.html" data-toggle="tooltip" data-placement="top" title="Blog Details Page"><img src="demo/blog_details.png" alt="" class="img-fluid"></a></li>
                    <li><a href="event.html" data-toggle="tooltip" data-placement="top" title="Event Page"><img src="demo/event.png" alt="" class="img-fluid"></a></li>
                    <li><a href="event-details.html" data-toggle="tooltip" data-placement="top" title="Event Deiails"><img src="demo/event_details.png" alt="" class="img-fluid"></a></li>
                    <li><a href="teacher-profile.html" data-toggle="tooltip" data-placement="top" title="Teacher Profile"><img src="demo/teacher_pro.png" alt="" class="img-fluid"></a></li>
                    <li><a href="course.html" data-toggle="tooltip" data-placement="top" title="Courses Page"><img src="demo/course.png" alt="" class="img-fluid"></a></li>
                    <li><a href="course-details.html" data-toggle="tooltip" data-placement="top" title="Courses Details"><img src="demo/course_details.png" alt="" class="img-fluid"></a></li>
                    <li><a href="team.html" data-toggle="tooltip" data-placement="top" title="Team Page"><img src="demo/team.png" alt="" class="img-fluid"></a></li>
                    <li><a href="contact.html" data-toggle="tooltip" data-placement="top" title="Contact Page"><img src="demo/contact.png" alt="" class="img-fluid"></a></li>
                </ul>
            </div>
        </div>
    </div>
	<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/dataviz.js"></script>

<!-- Chart code School-->
<script>
$(document).ready( function(){
	AllIndiaSectionFunction('all');
	DrinkingWaterPercentage(1)
});



function DrinkingWaterPercentage(id) {
	$.ajax({
url: "../data/getInfrastructure.php",
type: "POST",
data:  {id:id},

success:function(data) {
	var res = JSON.parse(data);
	
var chart = new CanvasJS.Chart("chartdivPercentage", {
	animationEnabled: true,
	title: {
		text: res.name
	},
	axisX: {
		interval: 1
	},
	axisY: {
		title: "",
		includeZero: true,
		scaleBreaks: {
			type: "wavy",
			customBreaks: [{
				startValue: 80,
				endValue: 210
				},
				{
					startValue: 230,
					endValue: 600
				}
		]}
	},
	data: [{
		type: "bar",
		toolTipContent: " <b>{label}</b>:{exist} out of {total} ({y}%)",
		dataPoints: [
		{ label: "Other", y: 21, exist: 11356, total: 15356},
		{ label: "Private", y: 94, exist: 11356, total: 15356},
		{ label: "Aided", y: 95.8, exist: 11356, total: 15356},
		{ label: "Govt", y: 97.8, exist: 11356, total: 15356}
			
			
			
		]
	}]
});
chart.render();

	}
});
}
	
function AllIndiaSectionFunction(stringType) {
var stateId = $('#stateId').val();
$.ajax({
url: "../data/allIndiaFigures.php",
type: "POST",
data:  {allData:stringType,stateId:stateId},

success:function(data) {
	$("#allIndiaFigures").html(data);
	$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
	am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
am4core.useTheme(am4themes_dataviz);
// Themes end

var chartSchool = am4core.create("chartdivSchool", am4charts.PieChart3D);
chartSchool.hiddenState.properties.opacity = 0; // this creates initial fade-in

chartSchool.data = [
  {
    country: "Govt",
    litres: 47223
  },
  {
    country: "Aided",
    litres: 5065
  },
  {
    country: "Private",
    litres: 6084
  },
  {
    country: "Others",
    litres: 7952
  }
];
chartSchool.logo.disabled = true;
chartSchool.innerRadius = am4core.percent(10);
chartSchool.depth = 10;

chartSchool.legend = new am4charts.Legend();

var seriesSchool = chartSchool.series.push(new am4charts.PieSeries3D());
seriesSchool.dataFields.value = "litres";
seriesSchool.dataFields.depthValue = "litres";
seriesSchool.dataFields.category = "country";
seriesSchool.ticks.template.disabled = true;
seriesSchool.alignLabels = true;
seriesSchool.labels.template.fill = am4core.color("white");
var colorSetSchool = new am4core.ColorSet();
colorSetSchool.list = ["#388E3C", "#FBC02D", "#0288d1", "#F44336", "#8E24AA"].map(function(color) {
  return new am4core.color(color);
});
seriesSchool.colors = colorSetSchool;
seriesSchool.slices.template.cornerRadius = 5;
seriesSchool.colors.step = 3;

}); // end am4core.ready()
<!-- Chart code Teacher-->
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chartTeacher = am4core.create("chartdivTeacher", am4charts.PieChart3D);
chartTeacher.hiddenState.properties.opacity = 0; // this creates initial fade-in

chartTeacher.data = [
  {
    country: "Govt",
    litres: 225216
  },
  {
    country: "Aided",
    litres: 37131
  },
  {
    country: "Private",
    litres: 87452
  },
  {
    country: "Others",
    litres: 26187
  }
];
chartTeacher.logo.disabled = true;
chartTeacher.innerRadius = am4core.percent(10);
chartTeacher.depth = 10;

chartTeacher.legend = new am4charts.Legend();

var seriesTeacher = chartTeacher.series.push(new am4charts.PieSeries3D());
seriesTeacher.dataFields.value = "litres";
seriesTeacher.dataFields.depthValue = "litres";
seriesTeacher.dataFields.category = "country";
seriesTeacher.ticks.template.disabled = true;
seriesTeacher.alignLabels = true;
seriesTeacher.labels.template.fill = am4core.color("white");
var colorSetTeacher = new am4core.ColorSet();
colorSetTeacher.list = ["#388E3C", "#FBC02D", "#0288d1", "#F44336", "#8E24AA"].map(function(color) {
  return new am4core.color(color);
});
seriesTeacher.colors = colorSetTeacher;
seriesTeacher.labels.template.fill = am4core.color("white");
seriesTeacher.slices.template.cornerRadius = 5;
seriesTeacher.colors.step = 3;

}); // end am4core.ready()

<!-- Chart code Student-->
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chartStudent = am4core.create("chartdivStudent", am4charts.PieChart3D);
chartStudent.hiddenState.properties.opacity = 0; // this creates initial fade-in

chartStudent.data = [
  {
    country: "Govt",
    litres: 4798865
  },
  {
    country: "Aided",
    litres: 458365
  },
  {
    country: "Private",
    litres: 1290181
  },
  {
    country: "Others",
    litres: 383025
  }
];
chartStudent.logo.disabled = true;
chartStudent.innerRadius = am4core.percent(10);
chartStudent.depth = 10;

chartStudent.legend = new am4charts.Legend();

var seriesStudent = chartStudent.series.push(new am4charts.PieSeries3D());
seriesStudent.dataFields.value = "litres";
seriesStudent.dataFields.depthValue = "litres";
seriesStudent.dataFields.category = "country";
seriesStudent.ticks.template.disabled = true;
seriesStudent.alignLabels = true;
seriesStudent.labels.template.fill = am4core.color("white");
var colorSetStudent = new am4core.ColorSet();
colorSetStudent.list = ["#388E3C", "#FBC02D", "#0288d1", "#F44336", "#8E24AA"].map(function(color) {
  return new am4core.color(color);
});
seriesStudent.colors = colorSetStudent;
seriesStudent.labels.template.fill = am4core.color("white");
seriesStudent.slices.template.cornerRadius = 5;
seriesStudent.colors.step = 3;

}); // end am4core.ready()
					
}
});

}
</script>
<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

 // Create chart instance
var chartCategory = am4core.create("chartdivCategory", am4charts.XYChart);

// Add data
chartCategory.data = [{
  "category": 'Primary',
  "boys": 62403871,
  "girls": 57637224
},{
  "category": 'Upper Primary',
  "boys": 33103512,
  "girls": 31056694
},{
  "category": 'Secondary',
  "boys": 19967579,
  "girls": 18284871
},{
  "category": 'Higher Secondary',
  "boys": 13124077,
  "girls": 12275860
}];
chartCategory.logo.disabled = true;
// Create axes
var categoryAxis = chartCategory.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "category";
categoryAxis.numberFormatter.numberFormat = "#";
categoryAxis.renderer.inversed = true;
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.cellStartLocation = 0.1;
categoryAxis.renderer.cellEndLocation = 0.9;

var  valueAxis = chartCategory.xAxes.push(new am4charts.ValueAxis()); 
valueAxis.renderer.opposite = true;

// Create series
function createSeries(field, name) {
  var seriesCategory = chartCategory.series.push(new am4charts.ColumnSeries());
  seriesCategory.dataFields.valueX = field;
  seriesCategory.dataFields.categoryY = "category";
  seriesCategory.name = name;
  seriesCategory.columns.template.tooltipText = "{name}: [bold]{valueX}[/]";
  seriesCategory.columns.template.height = am4core.percent(80);
  seriesCategory.sequencedInterpolation = true;

  var valueLabel = seriesCategory.bullets.push(new am4charts.LabelBullet());
  valueLabel.label.text = "{valueX}";
  valueLabel.label.horizontalCenter = "left";
  valueLabel.label.dx = 5;
  valueLabel.label.hideOversized = false;
  valueLabel.label.truncate = false;

  var categoryLabel = seriesCategory.bullets.push(new am4charts.LabelBullet());
  categoryLabel.label.text = "{name}";
  categoryLabel.label.horizontalCenter = "right";
  categoryLabel.label.dx = -2;
  categoryLabel.label.fill = am4core.color("#fff");
  categoryLabel.label.hideOversized = false;
  categoryLabel.label.truncate = false;
}

createSeries("boys", "Boys");
createSeries("girls", "Girls");

}); // end am4core.ready()

    $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:4,
        itemsDesktop:[500,4],
        itemsDesktopSmall:[480,1],
        itemsTablet:[268,1],
        pagination:true,
        navigation:true,
        navigationText:["<",">"],
        autoPlay:true
    });
});


</script>
</body>

</html>
