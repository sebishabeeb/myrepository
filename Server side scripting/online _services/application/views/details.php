
	
		<title>Spike shoes Website Template | Details :: w3layouts</title>
		<link href="<?php echo base_url();?>css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='<?php echo base_url();?>http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<script src="<?php echo base_url();?>js/jquery.min.js"></script>
		<!----start-alert-scroller---->
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.easy-ticker.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#demo').hide();
			$('.vticker').easyTicker();
		});
		</script>	
		<!----start-alert-scroller---->
		<!-- start menu -->
		<link href="<?php echo base_url();?>css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="<?php echo base_url();?>js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="<?php echo base_url();?>js/menu_jquery.js"></script>
		<!-- //End menu -->
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

		function jj(k){
			 alert('hi');
			 console.log('hi');
			 var st=$("#stc").val();
			 var am=$("#spr").val();
			 var v=$("#qt").val();
			 alert(st);
			 alert(am);
			 alert(v);
			var msg="";
// if (st<1) 
 	// {

 	   msg="<div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times</button>
          <h4 class='modal-title'style='color:coral'>Message</h4>
        </div>
        <div class='modal-body'>
          <p style='color:coral;'>Oops! This Product Is Out of Stock </p>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-primary' data-dismiss='modal'>OK</button>
        </div>
      </div>
      
    </div>
  </div>";                   
  // }
//  else{
//  		 msg="
//         <div class='modal-header'>
//           <button type='button' class='close' data-dismiss='modal'>&times</button>
//           <h4 class='modal-title'style='color:coral'>Message</h4>
//         </div>
//         <div class='modal-body'>
//           <p style='color:coral'>Are You Sure </p>
//         </div>
//         <div class='modal-footer'>
//           <button type='button' class='btn btn-primary' data-dismiss='modal'>OK</button>
//         </div>
//       </div>
      
//     </div>
//   </div>" ;                   
 		
//  		$.ajax({
//  			'type':"post",
//  			'datatype':"json",
//  			'url':"<?php base_url();?>"+"brougt",
//  			'data':{name:id,amount:am,quantityq:v},
//  			'success':function(data){
//  				 app="<div class='modal-header'>
//           <button type='button' class='close' data-dismiss='modal'>&times</button>
//           <h4 class='modal-title'style='color:coral'>Message</h4>
//         </div>
//         <div class='modal-body'>
//           <p style='color:coral'>The Product Is Comming Soon </p>
//         </div>
//         <div class='modal-footer'>
//           <button type='button' class='btn btn-primary' data-dismiss='modal'>OK</button>
//         </div>
//       </div>
      
//     </div>
//   </div>";
//   $('#ab').append(msg); 

//  			}


//  		});
// }

	}		
		</script>
		
	
	
		
				<!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="<?php echo base_url();?>css/etalage.css">
					<script src="<?php echo base_url();?>js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								
								source_image_width: 900,
								source_image_height: 1000,
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<div class="container">
				<div class="details-left">
					<div class="details-left-slider">
						<ul id="etalage">
							<li>
								
									
									<img class="etalage_source_image" src=http://localhost/online/uploads/<?php echo ($img)?>> 
					
							</li>
							
						</ul>
					</div>

					<div class="details-left-info">
						<div class="details-right-head">
						<h1 id="name"><?php echo ($name)?></h1>
						<ul class="pro-rate">
							<li><a class="product-rate" href="#"> <label> </label></a> <span> </span></li>
						
						</ul>
						<p class="product-detail-info"><?php echo ($desc)?></p>
						
						<div class="product-more-details">
							<ul class="price-avl">
								<li class="price" id="spr" value="<?php echo ($pr)?>"><label>Price:<?php echo ($pr)?></label></li>
								
								<div class="clear"> </div>
								<div style="float:left;">

								<li class="stock"id="stc" value="<?php echo ($st)?>"><label style="color:red">Avalable stock(<?php echo ($st)?>)</label></li>
								</div>
							</ul>

							<div>
							<ul class="prosuct-qty">
								<span style="margin-top:3%;position: absolute;color:green;">Quantity:</span>
								<select id="qt"style="margin-top:2%;position:absolute;margin-left:6%;">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
								</select>
							</ul>
							</div>
							<button type="submit" class='btn btn-primary'data-target="#buy"data-toggle="modal"value="<?php echo ($id)?>" onclick="jj(<?php echo ($id)?>)" style="margin-top:18%;">Buy Now</button>
							
						</div>
					</div>
					</div>
					
			</div>
			</div>
		<!---//End-footer---->
		<div class="modal fade" id="buy" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content"id="ab"style="background-color:white;width:53%;margin-left:69%">
		</div>
		</div>
		</div>
		<!---//End-wrap---->
	

