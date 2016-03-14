


	
		<style type="text/css">

        
  .modal-header, h5, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>

		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<title>Spike shoes Website Template | Home :: w3layouts</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-alert-scroller---->
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easy-ticker.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#demo').hide();
			$('.vticker').easyTicker();
		});
		</script>
		<!----start-alert-scroller---->
		<!-- start menu -->
		<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="js/menu_jquery.js"></script>
		<!-- //End menu -->
		<!---slider---->
		<link rel="stylesheet" href="css/slippry.css">
		<script src="js/jquery-ui.js" type="text/javascript"></script>
		<script src="js/scripts-f0e4e0c2.js" type="text/javascript"></script>
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
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
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
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script>
		$(document).ready(function(){
	
  $.ajax({
 
  	'type':"post",
  	'url':"<?php base_url();?>"+"index.php/mycontroller/disp",
  	'datatype':"json",
  	
  	'success':function(data){
  		
     var cat=JSON.parse(data);
    
     var toappend="";
     for (var i = 0; i < cat.length; i++) {
     	
     	toappend+="<ul value='"+cat[i].pk_int_category_id+"'>"+cat[i].category_name+"<button type=button class='btn btn-link'onclick='sub(this.value)'value='"+cat[i].pk_int_category_id+"'><span class='glyphicon glyphicon-chevron-right'></span></button></ul><div id='"+cat[i].pk_int_category_id+"'></div>";
     };
     $('#ddd').append(toappend);

  	}
  });
  $.ajax({
      
      'type':"post",
      'url':"<?php base_url();?>"+"index.php/mycontroller/hmproduct",
      'datatype':"json",
      

      'success':function(data){
      
      	var dd=JSON.parse(data);
      	$('#sebi').empty();
      	var toappend="";
      	for (var i = 0; i < dd.length; i++) {
      		
      		// console.log(dd[i].product_name);
      		 // console.log(dd[i].product_image);
      		toappend+="<div onclick='location.href='details.html';' class='product-grid'><div class='product-grid-head'><ul class='grid-social'><li><a class='facebook' href='#'><span> </span></a></li><li><a class='twitter' href='#'><span> </span></a></li><li><a class='googlep' href='#'><span> </span></a></li><div class='clear'> </div></ul><div class='block'><div class='starbox small ghosting'></div><h2 style='color:red'>Available stock("+dd[i].stock+")</h2><div style='float:right;'><span class='glyphicon glyphicon-star'></div></span></div></div><div class='product-pic'><a href='#'><img  style='width:250px;height:300px' src='<?php echo base_url();?>uploads/"+dd[i].product_image+"'></a><p><span>"+dd[i].product_name+"</span></p></div><div class='product-info'><div class='product-info-cust'><button type='button' class='btn btn-info' data-target='#myModal'data-toggle='modal'>buy</button></div><div class='product-info-price'>&#163;"+dd[i].buying_price+"</div><div class='clear'> </div></div><div class='more-product-info'></div></div>"

      			};
      	$('#sebi').append(toappend);
      }
	});


});


			function sub(m)
{
	
	$('#'+m).load('index.php/mycontroller/myfunc');
	
	$.ajax({
	'type':"post",
	'url':"<?php base_url();?>"+"index.php/mycontroller/desplaysub",
	'datatype':"json",
	'data':{name:m},
	'success':function(data){
		
		var sub=JSON.parse(data);
		
		var toappend="";
		for (var i = 0; i < sub.length; i++) {
			toappend+="<li> <ul'value='"+sub[i].pk_int_subcategory_id+"'>"+sub[i].subcat_name+"<button type=button class='btn btn-link'onclick='product(this.value)'value='"+sub[i].pk_int_subcategory_id+"'><span class='glyphicon glyphicon-chevron-left'></span></button></ul></li><br>"
		};
		$('#'+m).append(toappend);
	}
  });
}
function product(d)
{
	
	$.ajax({
      
      'type':"post",
      'url':"<?php base_url();?>"+"index.php/mycontroller/productonchange",
      'datatype':"json",
      'data':{name:d},

      'success':function(data){
      
      	var dd=JSON.parse(data);
      	$('#sebi').empty();
      	var toappend="";
      	for (var i = 0; i < dd.length; i++) {
      		
      		// console.log(dd[i].product_name);
      		 // console.log(dd[i].product_image);
      		toappend+="<div onclick='location.href='details.html';' class='product-grid'><div class='product-grid-head'><ul class='grid-social'><li><a class='facebook' href='#'><span> </span></a></li><li><a class='twitter' href='#'><span> </span></a></li><li><a class='googlep' href='#'><span> </span></a></li><div class='clear'> </div></ul><div class='block'><div class='starbox small ghosting'></div><h2 style='color:red'>Available stock("+dd[i].stock+")</h2><div style='float:right;'><span class='glyphicon glyphicon-star'></div></span></div></div><div class='product-pic'><a href='#'><img  style='width:250px;height:300px' src='<?php echo base_url();?>uploads/"+dd[i].product_image+"'></a><p><span>"+dd[i].product_name+"</span></p></div><div class='product-info'><div class='product-info-cust'><button type='button' class='btn btn-info' onclick='fundetails("+dd[i].pk_int_productid+")'>Details</button></div><div class='product-info-price'>&#163;"+dd[i].buying_price+"</div><div class='clear'> </div></div><div class='more-product-info'></div></div>"

      			};
      	$('#sebi').append(toappend);
      }
	});
}
function fundetails(pk)
{
   
	$.ajax(
	{
      'type':"post",
      'datatype':"json",
      'url':"<?php base_url();?>"+"index.php/Mycontroller/showdetails",
      'data':{name:pk},
    
		'success':function(data)
			{
				
				var cc=JSON.parse(data);
				for (var i = 0; i < cc.length; i++) 
				{

				id=cc[i].pk_int_productid;
                name=cc[i].product_name;
                desc=cc[i].vchr_description; 
                img=cc[i].product_image;
                pr=cc[i].selling_price; 
                st=cc[i].stock;
			    }
				
			
			$('#xyz').load('index.php/Mycontroller/detailse1',{c:id,d:name,e:desc,f:img,g:pr,h:st});
			
		}
	});
}

		</script>
		<!---//move-top-top---->
	</head>
	<body id="xyz">
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="top-header">
					<div class="wrap">
						<!--  -->
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
								<li><a href="index.php/Mycontroller/login">Login</a><span> </span></li>
								<li><a href="index.php/Mycontroller/insertreg">Join</a></li>
							</ul>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				
				<div class="col-sm-1"style="margin-left:9%;margin-top:7%;">
		<ul class="megamenu skyblue">
	    <li class="grid"id="ddd"><a class="color2">Categories</a></li>
		</ul>
		</div>
				
				<!----//End-mid-head---->
				<!----start-bottom-header---->
				
				</div>
				<!----//End-bottom-header---->
			<!---//End-header---->
		<!----start-image-slider---->
		<div class="col-md-9"style="float:right;">
		<div class="img-slider">
			<div class="wrap">
			<ul id="jquery-demo">
			  <li>
			    <a href="#slide1">
			      <img src="images/slide-1.jpg" alt="" />
			    </a>
			    <div class="slider-detils">
			    	<h3>MENS FOOT BALL <label>BOOTS</label></h3>
			    	<span>Stay true to your team all day, every day, game day.</span>
			    	
			    </div>
			  </li>
			  <li>
			    <a href="#slide2">
			      <img src="images/slide-33.jpg"  alt="" />
			    </a>
			     <div class="slider-detils">
			    	<h3>MENS FOOT BALL <label>BOOTS</label></h3>
			    	<span>Stay true to your team all day, every day, game day.</span>
			    	
			    </div>
			  </li>
			  <li>
			    <a href="#slide3">
			      <img src="images/slide-34.jpg" alt="" />
			    </a>
			     <div class="slider-detils">
			    	<h3>MENS FOOT BALL <label>BOOTS</label></h3>
			    	<span>Stay true to your team all day, every day, game day.</span>
			    	
			    </div>
			  </li>
			</ul>
			</div>
		</div>
		</div>
		<div class="clear"> </div>
		
		<div id="sebi"style="margin-left: 15%;"></div>
		<!----//End-image-slider---->
		
		<!--- start-content---->
		<div class="content">
			<div class="wrap">
				<div class="content-left">
						
						
				</div>
				<div class="content-right">
					<div class="product-grids">
						<!--- start-rate---->
							<script src="js/jstarbox.js"></script>
							<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
							<script type="text/javascript">
								jQuery(function() {
									jQuery('.starbox').each(function() {
										var starbox = jQuery(this);
										starbox.starbox({
											average: starbox.attr('data-start-value'),
											changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
											ghosting: starbox.hasClass('ghosting'),
											autoUpdateAverage: starbox.hasClass('autoupdate'),
											buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
											stars: starbox.attr('data-star-count') || 5
										}).bind('starbox-value-changed', function(event, value) {
											if(starbox.hasClass('random')) {
												var val = Math.random();
												starbox.next().text(' '+val);
												return val;
											} 
										})
									});
								});
							</script>
							<!---//End-rate---->
							<!---caption-script---->
							<!---//caption-script---->
						
						
						
						
						
						
						<div class="clear"> </div>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!---- start-bottom-grids---->
		<div class="bottom-grids">
			<div class="bottom-top-grids">
				<div class="wrap">
					<div class="bottom-top-grid">
						<h4>GET HELP</h4>
						<ul>
							<li><a href="contact.html">Contact us</a></li>
							<li><a href="#">Shopping</a></li>
							<li><a href="#">NIKEiD</a></li>
							<li><a href="#">Nike+</a></li>
						</ul>
					</div>
					<div class="bottom-top-grid">
						<h4>ORDERS</h4>
						<ul>
							<li><a href="#">Payment options</a></li>
							<li><a href="#">Shipping and delivery</a></li>
							<li><a href="#">Returns</a></li>
						</ul>
					</div>
					<div class="bottom-top-grid last-bottom-top-grid">
						<h4>REGISTER</h4>
						<p>Create one account to manage everything you do with Nike, from your shopping preferences to your Nike+ activity.</p>
						<a class="learn-more" href="#">Learn more</a>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			<div class="bottom-bottom-grids">
				<div class="wrap">
					<div class="bottom-bottom-grid">
						<h6>EMAIL SIGN UP</h6>
						<p>Be the first to know about new products and special offers.</p>
						<a class="learn-more" href="#">Sign up now</a>
					</div>
					<div class="bottom-bottom-grid">
						<h6>GIFT CARDS</h6>
						<p>Give the gift that always fits.</p>
						<a class="learn-more" href="#">View cards</a>
					</div>
					<div class="bottom-bottom-grid last-bottom-bottom-grid">
						<h6>STORES NEAR YOU</h6>
						<p>Locate a Nike retail store or authorized retailer.</p>
						<a class="learn-more" href="#">Search</a>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
		<!---- //End-bottom-grids---->
		<!--- //End-content---->
		<!---start-footer---->
		<div class="footer">
			<div class="wrap">
				<div class="footer-left">
					<ul>
						<li><a href="#">United Kingdom</a> <span> </span></li>
						<li><a href="#">Terms of Use</a> <span> </span></li>
						<li><a href="#">Nike Inc.</a> <span> </span></li>
						<li><a href="#">Launch Calendar</a> <span> </span></li>
						<li><a href="#">Privacy & Cookie Policy</a> <span> </span></li>
						<li><a href="#">Cookie Settings</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="footer-right">
					<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
			    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!---//End-footer---->
		<!---//End-wrap---->
		


<div class="container">
  <h2>Modal Login Example</h2>
  <!-- Trigger the modal with a button -->
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5><span class="glyphicon glyphicon-lock"></span> Login</h5>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form  action="index.php/Mycontroller/login"method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="uname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="pswrd" placeholder="Enter password">
            </div>
            <div>
            	<br>
            	<br>
            	<br>
              <!-- <label><input type="checkbox" value="" checked>Remember me</label> -->
            </div>
              <button type="submit" class="btn btn-success btn-block"name="sub"><span class="glyphicon glyphicon-off"></span>Login</button>
          </form>
        </div>
        <div class="modal-footer">
         
         
        </div>
      </div>
      
    </div>
  </div> 
</div>
 


	


