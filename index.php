<?php
	/// DB-Abfrage ///
	$con = mysqli_connect("sql266.your-server.de","lebenslauf_5", "shanghai1", "lebenslauf_db1");
	mysqli_set_charset($con,"utf8");
	
	//mysqli_select_db($con, "lebenslauf_db1");
	//$abfrage = "select * from userinfo";
?>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">
    
    
	<title> Denis Schatto Lebenslauf </title>
	<meta name="description" content="Denis Schatto Lebenslauf">
    
    <!-- /// Favicons ////////  -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="favicon.png">

	<!-- ///  CSS ////////  -->
    <link rel="stylesheet" href="_layout/css/base.css">
    <link rel="stylesheet" href="_layout/css/grid.css">
    <link rel="stylesheet" href="_layout/css/elements.css">
    <link rel="stylesheet" href="_layout/css/layout.css">

	<!-- /// JS Plugins CSS ////////  -->
    <link rel="stylesheet" href="_layout/js/magnificpopup/magnific-popup.css">  
    
    <!-- /// Google Fonts ////////  -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    
    <!-- /// FontAwesome Icons ////////  -->
	<link rel="stylesheet" href="_layout/css/fontawesome/font-awesome.min.css">
    
	<!-- /// Modernizr ////////  -->
    <script src="_layout/js/modernizr-2.6.2.min.js"></script>
 
</head>

<body>

<div id="wrap">
	
		<div id="header">
        
		<!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			<div class="row cv-section">
                <div class="span9">
                    
                    <div class="cv-section-title">
                        
                    <?php 
					 $res = mysqli_query($con, "select * from userinfo");
					 while($bewerber = mysqli_fetch_array($res))
					{
						echo "<img src='_content/" . $bewerber["profilepic"] . "' />";
						echo "<h1>";
							echo " " . $bewerber["name"] . " ";
                            echo "<small> ".$bewerber["jobname"]." </small>";
						echo "</h1>";					
					}					
					?>
                        

                        
                    </div><!-- end .cv-section-title -->
                    
                </div><!-- end .span9 -->
                <div class="span3">
                    
                    <div class="cv-item">
                        
                        <div class="social-media fixed">
                            
                            <a href="#" class="facebook-icon social-icon">
                                <i class="fa fa-facebook"></i>
                            </a>
                            
                            <a href="#" class="twitter-icon social-icon">
                                <i class="fa fa-twitter"></i>
                            </a>
                            
                            <a href="#" class="googleplus-icon social-icon">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            
                            <a href="#" class="linkedin-icon social-icon">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            
                        </div>
                        
                        <p class="last">
						
							<?php 
							$res2 = mysqli_query($con, "select * from userinfo");
							while($adresse = mysqli_fetch_array($res2))
							{
								echo "<span class='hidden-tablet'>Email: </span><a href='" . $adresse["mail"] . "'>" . $adresse["mail"] . "</a>";
								echo "<br><span class='hidden-tablet'>Tel: </span>" . $adresse["tel"] . "";
								echo "<br><span class='hidden-tablet'>Web: </span><a href='#'>www.johnsmithsite.com</a>";											
							}					
							?>						
                            
                        </p>
                        
                    </div><!-- end .cv-item -->
                    
                </div><!-- end .span3 -->
            </div><!-- end .cv-section -->	

		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #header -->
		<div id="content">
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <div class="row cv-section">
                <div class="span3">
                    
                    <div class="cv-section-title">
                        
                        						
						<h2>Über mich</h2>	
						
                        
                    </div><!-- end .cv-section-title -->
                    
                </div><!-- end .span3 -->
                <div class="span9">
                    
                    <div class="cv-item">
                        
                        					
						<?php 
							$res4 = mysqli_query($con, "select * from uebermich");
							while($aboutme = mysqli_fetch_array($res4))
							{
								echo "<p>" . $aboutme["text"] . "</p>";															
							}					
						?>	
						
                        
                    </div><!-- end .cv-item -->
                    
                </div><!-- end .span9 -->
            </div><!-- end .cv-section -->
            	
            <div class="row cv-section">
                <div class="span3">
                    
                    <div class="cv-section-title">
                        
                        <h2>Arbeitserfahrung</h2>
                        
                    </div><!-- end .cv-section-title -->
                    
                </div><!-- end .span3 -->
                <div class="span9">
                    
                    <div class="cv-item">
                        
                        <p class="period">Juli 2007 - 2010</p>
                        
                        <h3><strong>Junior Projekt Manager</strong></h3>
                        <h4>pw-Internet GmbH, Vollzeit</h4>
                        
                        <br>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vehicula, magna et bibendum 
                        malesuada, purus augue suscipit dolor, vitae fringilla dui nibh non lectus. Curabitur in 
                        pellentesque tortor. Nunc posuere vestibulum augue, quis posuere orci blandit vitae. Suspendisse 
                        dignissim elit dui, ac dictum felis interdum nec. </p>
                        
                        <ul class="fill-circle">
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                            <li>Vivamus vitae libero odio, eu interdum elit</li>
                            <li>Donec dignissim purus vel leo accumsan interdum</li>
                            <li>Proin sit amet massa mi, in volutpat ante</li>
                        </ul>
                        
                    </div><!-- end .cv-item -->
                    
                    <div class="cv-item">
                        
                        <p class="period">April 2010 - Mai 2014</p>
                        
                        <h3><strong>Front-End Developer</strong></h3>
                        <h4>Bienefeld & Coolhaas Gbr, Vollzeit</h4>
                        
                        <br>
                        
                        <p>Curabitur in pellentesque tortor. Nunc posuere vestibulum augue, quis posuere orci blandit 
                        vitae. Suspendisse dignissim elit dui, ac dictum felis interdum nec. </p>
                        
                        <ul class="fill-circle">
                            <li>Vivamus vitae libero odio, eu interdum elit</li>
                            <li>Donec dignissim purus vel leo accumsan interdum</li>
                            <li>Proin sit amet massa mi, in volutpat ante</li>
                        </ul>
                        
                    </div><!-- end .cv-item -->
                    
                </div><!-- end .span9 -->
            </div><!-- end .cv-section -->
            
            <div class="row cv-section">
                <div class="span3">
                    
                    <div class="cv-section-title">
                        
                        <h2>Portfolio</h2>
                        
                    </div><!-- end .cv-section-title -->
                    
                </div><!-- end .span3 -->
                <div class="span9">
                    
                    <div class="cv-item">
                        
                        <div class="portfolio-filter">
                
                            <ul>
                                <li>
                                    <a class="active" data-filter="*" href="#">All</a>
                                </li>
                                <li>
                                    <a data-filter=".term-1" href="#">Webdesign</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".term-2">Fotografie</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".term-3">Grafik Design</a>
                                </li>
                            </ul>
                            
                        </div><!-- end .portfolio-filter -->
                        
                    </div><!-- end .cv-item -->
                    
                </div><!-- end .span9 -->
            </div><!-- end .cv-section -->
            
            <div class="row cv-section">
                <div class="span12">
                    
                    <ul class="portfolio-items fixed">
                    	<li class="item term-1">
                        	
                            <img src="_content/portfolio/220x165-1.png" alt="">
                            
                            <a class="magnificPopup-gallery" href="_content/portfolio/220x165-1.png">
                            	<i class="fa fa-search-plus"></i>
                            </a>
                            
                        </li>
                        <li class="item term-2">
                        	
                            <img src="_content/portfolio/220x165-2.png" alt="">
                            
                            <a class="magnificPopup-gallery" href="_content/portfolio/220x165-2.png">
                            	<i class="fa fa-search-plus"></i>
                            </a>
                            
                        </li>
                        <li class="item term-3">
                        	
                            <img src="_content/portfolio/220x165-3.png" alt="">
                            
                            <a class="magnificPopup-gallery" href="_content/portfolio/220x165-3.png">
                            	<i class="fa fa-search-plus"></i>
                            </a>
                            
                        </li>
                        <li class="item term-2 term-4">
                        	
                            <img src="_content/portfolio/220x165-4.png" alt="">
                            
                            <a class="magnificPopup-gallery" href="_content/portfolio/220x165-4.png">
                            	<i class="fa fa-search-plus"></i>
                            </a>
                            
                        </li>
                        <li class="item term-2 term-3 term-4">
                        	
                            <img src="_content/portfolio/220x165-5.png" alt="">
                            
                            <a class="magnificPopup-gallery" href="_content/portfolio/220x165-5.png">
                            	<i class="fa fa-search-plus"></i>
                            </a>
                            
                        </li>
                        <li class="item term-3">
                        	
                            <img src="_content/portfolio/220x165-6.png" alt="">
                            
                            <a class="magnificPopup-gallery" href="_content/portfolio/220x165-6.png">
                            	<i class="fa fa-search-plus"></i>
                            </a>
                            
                        </li>
                        <li class="item term-3 term-4">
                        	
                            <img src="_content/portfolio/220x165-7.png" alt="">
                            
                            <a class="magnificPopup-gallery" href="_content/portfolio/220x165-7.png">
                            	<i class="fa fa-search-plus"></i>
                            </a>
                            
                        </li>
                        <li class="item term-2 term-3">
                        	
                            <img src="_content/portfolio/220x165-8.png" alt="">
                            
                            <a class="magnificPopup-gallery" href="_content/portfolio/220x165-8.png">
                            	<i class="fa fa-search-plus"></i>
                            </a>
                            
                        </li>
                    </ul>
                    
                </div><!-- end .span12 -->
            </div><!-- end .cv-section -->
            
            <div class="row cv-section">
                <div class="span3">
                    
                    <div class="cv-section-title">
                        
                        <h2>Fähigkeiten</h2>
                        
                    </div><!-- end .cv-section-title -->
                    
                </div><!-- end .span3 -->
                <div class="span9">
                    
                    <div class="cv-item fixed">
                        
                        <div class="pie-chart" data-percent="90" data-barColor="#fdb020" data-trackColor="#e0e0e0" data-lineWidth="4" data-barSize="160">
                        
                            <div class="pie-chart-percent">
                                <span></span>
                                %
                            </div><!-- end .pie-chart-percent -->
                            
                        </div><!-- end .pie-chart -->
                        
                        <div class="pie-chart-description">
                        
                            <h3 class="text-uppercase"><strong>Html5 &amp; Css3</strong></h3>
                            <p>Experte, 4 Jahre</p>
                            
                            <p class="last">Vestibulum feugiat gravida est nec ultrices. Pellentesque habitant morbi tristique senectus et netus 
                            et malesuada fames ac turpis egestas. Etiam vel velit quam. Donec quis porta libero. Mauris faucibus erat elit, nec 
                            malesuada augue varius sit amet lorem eu posuere.</p>
                        
                        </div><!-- end .pie-chart-description -->

                    </div><!-- end .cv-item -->
                    
                    <div class="cv-item fixed">
                        
                        <div class="pie-chart" data-percent="73" data-barColor="#fdb020" data-trackColor="#e0e0e0" data-lineWidth="4" data-barSize="160">
                        
                            <div class="pie-chart-percent">
                                <span></span>
                                %
                            </div><!-- end .pie-chart-percent -->
                            
                        </div><!-- end .pie-chart -->
                        
                        <div class="pie-chart-description">
                        
                            <h3><strong>Javascript</strong></h3>
                            <p>Anfänger, 1 Jahr</p>
                            
                            <p class="last">Morbi in mi non velit dapibus tincidunt ut vel dolor. Class aptent taciti sociosqu ad litora torquent 
                            per conubia nostra, per inceptos himenaeos. Morbi elementum urna vitae justo vehicula, in lacinia magna 
                            ornare. Aenean porttitor, quam quis fermentum consequat.</p>
                        
                        </div><!-- end .pie-chart-description -->

                    </div><!-- end .cv-item -->
                    
                    <div class="cv-item fixed">
                        
                        <div class="pie-chart" data-percent="60" data-barColor="#fdb020" data-trackColor="#e0e0e0" data-lineWidth="4" data-barSize="160">
                        
                            <div class="pie-chart-percent">
                                <span></span>
                                %
                            </div><!-- end .pie-chart-percent -->
                            
                        </div><!-- end .pie-chart -->
                        
                        <div class="pie-chart-description">
                        
                            <h3><strong>jQuerry</strong></h3>
                            <p>Anfänger, 1 Jahr</p>
                            
                            <p>Nunc imperdiet placerat diam et aliquet. Suspendisse massa neque, rhoncus eget posuere ac, aliquet ut 
                            mi. Etiam rhoncus placerat lorem eu posuere.</p> 
    
                            <p class="last">Nunc dignissim commodo urna, eget bibendum nisl vehicula nec. Mauris faucibus erat elit, nec malesuada 
                            augue varius sit amet. Morbi sit amet scelerisque risus. Duis vulputate, dolor ut mattis aliquam, massa diam 
                            imperdiet ante, vel viverra tortor risus sit amet eros. </p>
                        
                        </div><!-- end .pie-chart-description -->

                    </div><!-- end .cv-item -->
                    
                </div><!-- end .span9 -->
            </div><!-- end .cv-section -->
            
            <div class="row cv-section">
            	<div class="span3">
                
                	<div class="cv-section-title">
                    	
                        <h2>Ausbildung</h2>
                        
                    </div><!-- end .cv-section-title -->
                    
                </div><!-- end .span3 -->
                <div class="span9">
                
                	<div class="cv-item">
                    	
                        <h3><strong>Berufskolleg Platz der Republik</strong></h3>
                        <h4>Mediengestalter in digitale-/ Printmedien</h4>
                        
                        <br>
                        
                        <p class="last">Morbi in mi non velit dapibus tincidunt ut vel dolor. Class aptent taciti sociosqu ad litora torquent 
                        per conubia nostra, per inceptos himenaeos. Morbi elementum urna vitae justo vehicula, in lacinia magna ornare. 
                        Aenean porttitor, quam quis fermentum consequat, eros lorem imperdiet lorem,.</p>
                        
                    </div><!-- end .cv-item -->
                    
                </div><!-- end .span9 -->
            </div><!-- end .cv-section -->
    
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
		<div id="footer">
		
		<!-- /// FOOTER     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			
			 <div class="row">
            	<div class="span12">
                	
					<div class="cv-contact">
    	
						<div class="cv-contact-toggle">
							
							<a href="#">
								<i class="fa fa-envelope"></i>
							</a>
							
						</div><!-- end .cv-contact-toggle -->
						
						 <div class="cv-section-title">
                        
							<h2>Contact Form</h2>
							
						</div><!-- end .cv-section-title -->
						
						<p>Consectetur adipiscing elit phasellus non nibh a mi placerat imperdiet. </p>
						
						<form class="fixed" id="contact-form"  name="contact-form" method="post" action="_layout/php/send.php"> 
							<fieldset>
								
								<div id="formstatus"></div>
										
								<input id="name" type="text" name="name" value="" placeholder="name">
							
								<input id="email" type="text" name="email" value="" placeholder="address">
								
								<input id="subject" type="text" name="subject" value="" placeholder="subject">
								
								<textarea id="message" name="message" rows="50" cols="25" placeholder="message"></textarea>
								
								<input id="submit" type="submit" name="submit" value="Send!">
								   
							</fieldset>
						</form>
						
					</div><!-- end .cv-contact -->
			
                    <h4 class="copyright">&copy; 2015 Denis Schatto </h4>
                    
                </div><!-- end .span12 -->
            </div><!-- end .row -->
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #footer -->
		
	</div><!-- end #wrap -->
    
    <a id="back-to-top" href="#">
    	<i class="fa fa-angle-up"></i>
    </a>
	
	<a id="print" href="javascript:window.print()" title="Print the CV">
        <i class="fa fa-print"></i>
    </a>
    	
    <a id="pdf" href="#" title="Download it as a .pdf">
        <i class="fa fa-download"></i>
    </a>

    <!-- /// jQuery ////////  -->
	<script src="_layout/js/jquery-2.1.0.min.js"></script>
  
    <!-- /// ViewPort ////////  -->
	<script src="_layout/js/viewport/jquery.viewport.js"></script>
    
    <!-- /// Easing ////////  -->
	<script src="_layout/js/easing/jquery.easing.1.3.js"></script>

    <!-- /// SimplePlaceholder ////////  -->
	<script src="_layout/js/simpleplaceholder/jquery.simpleplaceholder.js"></script>

    <!-- /// Fitvids ////////  -->
    <script src="_layout/js/fitvids/jquery.fitvids.js"></script>
	
    <!-- /// bxSlider ////////  -->
	<script src="_layout/js/bxslider/jquery.bxslider.min.js"></script>
    
   	<!-- /// Magnific Popup ////////  -->
	<script src="_layout/js/magnificpopup/jquery.magnific-popup.min.js"></script>
    
    <!-- /// Isotope ////////  -->
	<script src="_layout/js/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="_layout/js/isotope/isotope.pkgd.min.js"></script>
    
    <!-- /// Parallax ////////  -->
	<script src="_layout/js/parallax/jquery.parallax.min.js"></script>	
	
	<!-- /// EasyPieChart ////////  -->
	<script src="_layout/js/easypiechart/jquery.easypiechart.min.js"></script>
    
    <!-- /// Easy Tabs ////////  -->
    <script src="_layout/js/easytabs/jquery.easytabs.min.js"></script>	
    
    <!-- /// Form validate ////////  -->
    <script src="_layout/js/jqueryvalidate/jquery.validate.min.js"></script>
    
	<!-- /// Form submit ////////  -->
    <script src="_layout/js/jqueryform/jquery.form.min.js"></script>
    
    <!-- /// gMap ////////  -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="_layout/js/gmap/jquery.gmap.min.js"></script>

		<!-- /// Custom JS ////////  -->
	<script src="_layout/js/plugins.js"></script>	
	<script src="_layout/js/scripts.js"></script>
<table border="0" width="100%">

<?php
  /* DB-Abfrage */ 
  $con = mysqli_connect("sql266.your-server.de","lebenslauf_5", "shanghai1", "lebenslauf_db1");
  mysqli_select_db($con, "blog");
  $res = mysqli_query($con, "select * from blogdaten"
    . " order by zeit desc");

  while($dsatz = mysqli_fetch_assoc($res))
  {
    /* Zeiten */
    $z = $dsatz["zeit"];
    $zeit = mktime(substr($z,11,2), substr($z,14,2),
      substr($z,17,2), substr($z,5,2), substr($z,8,2),
      substr($z,0,4));
    $awst = strtotime("+7 hour", $zeit);

    /* Ausgabe */
    echo "<tr>";
    echo "<td valign='top' class='li'>"
      . date("d.m.y H:i", $zeit) . " MEZ<br />"
      . date("d.m.y H:i", $awst) . " AWST</td>";
    if($dsatz["art"] == 1)
      echo "<td valign='top' width='20%'>"
        . "<img src='" . $dsatz["text"] . "' /></td>";
    else
      echo "<td valign='top' width='80%'>"
        . $dsatz["text"] . "</td>";
    echo "</tr>";
  }
  mysqli_close($con);

  echo "</table>";
?>

</body>
</html>
