<html>
	<head><script type="text/javascript">
    
	</script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

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
						<div class="top-header-left">
							<ul>
								<!---cart-tonggle-script---->
								<script type="text/javascript">
									$(function(){
									    var $cart = $('#cart');
									        $('#clickme').click(function(e) {
									         e.stopPropagation();
									       if ($cart.is(":hidden")) {
									           $cart.slideDown("slow");
									       } else {
									           $cart.slideUp("slow");
									       }
									    });
									    $(document.body).click(function () {
									       if ($cart.not(":hidden")) {
									           $cart.slideUp("slow");
									       } 
									    });
									    });
								</script>
								<!---//cart-tonggle-script---->
								
							</ul>
						</div>
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
						<div><li><a href="logout">Logout</a><li></div>
						
						<div class="clear"> </div>
					</div>
				</div>
				<!----start-mid-head---->
				<div class="mid-header">
					<div class="wrap">
						
						<div class="mid-grid-right">
							<a class="logo" href="index.html"><span> </span></a>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-mid-head---->
				<!----start-bottom-header---->
				<div class="header-bottom "style="width:97%;margin-left:1%">
					<div class="wrap">
					<!-- start header menu -->
							<ul class="megamenu skyblue bg-primary">
								<li class="grid"><a class="color2" href="#">ADD</a>
									<div class="megapanel ">
										<div class="row">
												
											
												<div class="h_nav">
													<h4><a href="addcat">Category</a></h4>
													<h4><a href="subc">Sub Category</a></h4>
													<h4><a href="product">Product</a></h4>
													
												</div>
                            

										
										    		
                                
                              
								<li class="active grid"><a class="color4" href="#">View</a>
									<div class="megapanel col-sm-offset-1">
										<div class="row">
											
												<div class="h_nav">
													<h4><a href="vcat">Category</a></h4>
													<h4><a href="viewsub">Sub Category</a></h4>
													<h4><a href="vviewproduct">Product</a></h4>
													
												</div>	
											
									<li class="active grid"><a class="color4" href="#">customer</a>
									<div class="megapanel col-sm-offset-2">
										<div class="row">
											
												<div class="h_nav">
													<h4><a href="">add customer</a></h4>
													<h4><a href="viewdetailse">view customer</a></h4>
													<h4><a href="viewcutomer">customer remove</a></h4>
													
												</div>	
							
												
									<li class="active grid"><a class="color5" href="#">Edit</a>
									<div class="megapanel col-sm-offset-4">
										<div class="row">
											
												<div class="h_nav">
													<h4><a href="editcat">Category</a></h4>
													<h4><a href="editsubcat">Sub Category</a></h4>
													<h4><a href="editpro">Product</a></h4>
													
														
												</div>
												
									</div>
									</li>
							</ul>

					</div><br><br><br><br><br><br>
				</div>
				</div>
				<!----//End-bottom-header---->
				
					</body>

					</html>