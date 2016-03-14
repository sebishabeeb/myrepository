<html>
	<head><link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<title>Spike shoes Website Template | Home :: w3layouts</title>
		<link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-alert-scroller---->
		<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easy-ticker.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
		 

			$('#demo').hide();
			$('.vticker').easyTicker();
		});
		</script>
		<!----start-alert-scroller---->
		<!-- start menu -->
		<link href="<?php echo base_url(); ?>css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="<?php echo base_url(); ?>js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="<?php echo base_url(); ?>js/menu_jquery.js"></script>
		<!-- //End menu -->
		<!---slider---->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/slippry.css">
		<script src="<?php echo base_url(); ?>js/jquery-ui.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>js/scripts-f0e4e0c2.js" type="text/javascript"></script>
		<script>
			  jQuery('#jquery-demo').slippry({
			  // general elements & wrapper
			  slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
			  // options
			  adaptiveHeight: false, // height of the sliders adapts to current slide
			  useCSS: false, // true, false -> fallback to js if no browser support
			  autoHover: false,
			  transition: 'fade'
			});
		</script>
		<!----start-pricerage-seletion---->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery-ui.css">
		<script type='text/javascript'>//<![CDATA[ 
			$(window).load(function(){
			 $( "#slider-range" ).slider({
			            range: true,
			            min: 0,
			            max: 500,
			            values: [ 100, 400 ],
			            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			            }
			 });
			$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
			
			});//]]>  
		</script>
		<!----//End-pricerage-seletion---->
		<!---move-top-top---->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<!---//move-top-top---->
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="top-header">
					<div class="wrap">
						
						<div class="top-header-center">
							<div class="top-header-center-alert-left">
								<h3>FREE DELIVERY</h3>
							</div>
							<div class="top-header-center-alert-right">
								<div class="vticker">
								  <ul>
									  <li>Applies to orders of $50 or more. <label>Returns are always free.</label></li>
								  </ul>
								</div>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="top-header-right">
							<ul>
								<li><a href="index.php/mycontroller/login">Login</a><span> </span></li>
								<li><a href="index.php/mycontroller/insertreg">Register</a><span> </span></li>

							</ul>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
			</div>
				
				<!----start-bottom-header---->
				