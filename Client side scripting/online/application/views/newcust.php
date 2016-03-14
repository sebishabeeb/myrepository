<html>
	<head>
		<title>Spike shoes Website Template | Home :: w3layouts</title>
		<link rel="stylesheet" href="<?php echo base_url();?>http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/etalage.css" />
		<script type="text/javascript" src="js/jquery.etalage.min.js"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link href="<?php echo base_url();?>css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='<?php echo base_url();?>http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-alert-scroller---->
		<script src="<?php echo base_url();?>js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.easy-ticker.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#demo').hide();
			$('.vticker').easyTicker();
// 		});
// $(document).ready(function(){
	
  $.ajax({
 
  	'type':"post",
  	'url':"http://api.baabtra.com/online_services/index.php/Mycontroller/disp",
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
});

function sub(m)
{
	
	$('#'+m).load('myfunc');
	
	$.ajax({
	'type':"post",
	'url':"http://api.baabtra.com/online_services/index.php/Mycontroller/desplaysub",
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
      'url':"http://api.baabtra.com/online_services/index.php/Mycontroller/productonchange",
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
      'url':"http://api.baabtra.com/online_services/index.php/Mycontroller/showdetails",
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
				
			
			$('#dtlsid').load('detailse1',{c:id,d:name,e:desc,f:img,g:pr,h:st});
			
		}
	});
}

// function buyprod(id,am,st){
// 	// var toappend="";
// 	// if (st<1) 
// 	// 	{
// 	// 		toappend="<div class='modal fade' id='outoff' role='dialog'>
//  //    <div class='modal-dialog'>
    
      
//  //      <div class='modal-content'style='background-color:white;width:53%;margin-left:69%'>
//  //        <div class='modal-header'>
//  //          <button type='button' class='close' data-dismiss='modal'>&times;</button>
//  //          <h4 class='modal-title'style='color:coral;'>Message</h4>
//  //        </div>
//  //        <div class='modal-body'>
//  //          <p style='color:coral'>Oh Sorry This Product Is Out Off Stock</p>
//  //        </div>
//  //        <div class='modal-footer'>
//  //          <button type='button' class='btn btn-primary' data-dismiss='modal'>OK</button>
//  //        </div>
//  //      </div>
      
//  //    </div>
//  //  </div>";          
//  //   }
// 	// else{
// 		confirm("Are You sure");
// 		var v=prompt("enter the quantity","1");
// 		$.ajax({
// 			'type':"post",
// 			'datatype':"json",
// 			'url':"<?php base_url();?>"+"brougt",
// 			'data':{name:id,amount:am,quantityq:v},
// 			'success':function(data){
// 				alert("The Product Will Coming Soon ");
// 			}


// 		});
// 	// }
// 	//console.log(id,am,st);
// }



		</script>
		<!----start-alert-scroller---->
		<!-- start menu -->
		<link href="<?php echo base_url();?>css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="<?php echo base_url();?>js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="<?php echo base_url();?>js/menu_jquery.js"></script>
		<!-- //End menu -->
		<!---slider---->
		<link rel="stylesheet" href="<?php echo base_url();?>css/slippry.css">
		<script src="<?php echo base_url();?>js/jquery-ui.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>js/scripts-f0e4e0c2.js" type="text/javascript"></script>
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
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jquery-ui.css">
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
		<script type="text/javascript" src="<?php echo base_url();?>js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/easing.js"></script>
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
	<body id="dtlsid">
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="top-header">
					
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
							<div class="top-header-right">
							<ul>
								<li><a href="logout">Logout</a></li>
							</ul>
						  </div>
							<div class="clear"> </div>
						</div>
						
						<div class="clear"> </div>
					</div>
				</div>
				
				<div class="header-bottom" >
					<div class="wrap">
					<!-- start header menu -->
					    <div class="col-md-2"style="margin-top:10%;">
							<ul class="megamenu skyblue">
					  					<li class="grid"id="ddd"><a class="color2">categories</a>
									<div id="ff"></div>
									
									</li>
							</ul></div>
			<!-- <products> -->
			<div class="col-md-9">
<div class="img-slider">
			<div class="wrap">
			<ul id="jquery-demo">
			  <li>
			    <a href="#slide1">
			      <img src="<?php echo base_url();?>images/slide-1.jpg" alt="" />
			    </a>
			    <div class="slider-detils">
			    	<h3>MENS FOOT BALL <label>BOOTS</label></h3>
			    	<span>Stay true to your team all day, every day, game day.</span>
			    
			    </div>
			  </li>
			  <li>
			    <a href="#slide2">
			      <img src="<?php echo base_url();?>images/slide-3.jpg"  alt="" />
			    </a>
			     <div class="slider-detils">
			    	<h3>MENS FOOT BALL <label>BOOTS</label></h3>
			    	<span>Stay true to your team all day, every day, game day.</span>
			    	
			    </div>
			  </li>
			  <li>
			    <a href="#slide3">
			      <img src="<?php echo base_url();?>images/slide-111.jpg" alt="" />
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

				<div class="col-md-12"id="sebi"style="width:96%;margin-left:5%"></div>

				<div class="content-right">

					<div class="product-grids">
						
							<script src="<?php echo base_url();?>js/jstarbox.js"></script>
							<link rel="stylesheet" href="<?php echo base_url();?>css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
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

							