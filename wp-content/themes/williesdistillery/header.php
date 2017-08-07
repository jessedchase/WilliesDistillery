<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>


<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_site_url(); ?>/images/favicon.ico">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$( document ).ready(function() {
	$('#mobilelink').click(function(){
		$( "#mobilenavwrapper ul" ).slideToggle( "slow", function() {});
	});
	
});	
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
	$( document ).ready(function() {
		if ($(window).width() > 960) {
			resizeSlider();
			$( window ).on("resize", function() {
			   resizeSlider();
			});
			function resizeSlider(){
				contentmargin = $('#soliloquy-container-28').css("height");
				headerheight = $('#header').css("height");
				$("#content").css("margin-top",parseInt(headerheight, 10) - parseInt(32, 10) + parseInt(contentmargin, 10) + "px");
				$("#slider").css("top",headerheight);
				$("#featured").css("margin-top",headerheight);
				$("#spacer").css("margin-bottom",headerheight);
			}
		}
	});
</script>
</head>
<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91323988-1', 'auto');
  ga('send', 'pageview');

</script>

<div id="header">
	<div id="headertop">
    	<div class="container">
            <div id="social">
                <a href="https://www.facebook.com/williesdistillery/?ref=ts" target="_blank">
                    <img src="<?php echo get_site_url(); ?>/images/social/facebook.png" alt="Follow Willies Distillery on Facebook!">
                </a>
                <a href="https://www.instagram.com/williesdistillery/" target="_blank">
                    <img src="<?php echo get_site_url(); ?>/images/social/instagram.png" alt="Follow Willies Distillery on Instagram!">
                </a>
                <a href="https://twitter.com/mtmoonshine" target="_blanK">
                    <img src="<?php echo get_site_url(); ?>/images/social/twitter.png" alt="Follow Willies Distillery on Twitter!">
                </a>
                <a href="https://www.linkedin.com/company/15388091?trk=vsrp_companies_cluster_name&trkInfo=VSRPsearchId%3A893536151483048542379%2CVSRPtargetId%3A15388091%2CVSRPcmpt%3Acompanies_cluster" target="_blank">
                    <img src="<?php echo get_site_url(); ?>/images/social/linkedin.png" alt="Follow Willies Distillery on Linkedin!">
                </a>
                
            </div>
            <div id="headeraddress">
            	<span>312 Main Street, Ennis, MT
            </div>
            <div id="store">
            	<a href="https://squareup.com/market/willies-distillery-inc" target="_blank"><img src="<?php echo get_site_url(); ?>/images/store.jpg" alt="store"> STORE</a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
	<div id="nav">
    	<div class="container">
            <div id="leftnav" class="nav">
            	<div id="leftbuttons" class="navbuttons"></div>
                <?php wp_nav_menu( array( 'menu' => 'Leftnav' )); ?>
            </div>
            <div id="rightnav" class="nav">
                <?php wp_nav_menu( array( 'menu' => 'Rightnav' )); ?>
                <div id="rightbuttons" class="navbuttons"></div>
            </div>
            
            <a href="javascript:void(0)" id="mobilelink">
                <img src="/images/mobile-menu.jpg" class="toolbaricon" alt="">
            </a> 
            
            <div class="clear"></div>
            <div id="logo">
                <a href="<?php echo get_site_url(); ?>">
                    <img src="<?php echo get_site_url(); ?>/images/logo.png" alt="Willies Distillery, Ennis Montana">
                </a>
            </div>
        </div>
        <div id="mobilenavwrapper">
			<?php wp_nav_menu( array( 'menu' => 'MobileNav' )); ?>
		</div>
    </div>
</div>
