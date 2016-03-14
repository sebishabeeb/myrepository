<html>
<head>
  <style type="text/css">

table
{
  margin-left: 47px;
}
  </style>
  <script type="text/javascript">
function product()
 {

  var val2=$('#pcatname').val();
  
        $.ajax({
          'type':"POST",
          'url':"<?php echo base_url();?>"+"index.php/mycontroller/prosub",
          'datatype':"json",
          'data':{name:val2},
          'success':function(data){
            //alert(data);
            $('#ppsub').empty();
            var abc=JSON.parse(data);
            var toappend="<option>Select Sub-category</option>";
            for (var i = 0; i <=abc.length-1; i++) {
              toappend+="<option value='"+abc[i].pk_int_subcategory_id+"'>"+abc[i].subcat_name+"</option>";
            };
            $('#ppsub').append(toappend);
          }


        });
}
 function move()
 {

  var val3=$('#ppsub').val();
    
        $.ajax({
          'type':"POST",
          'url':"<?php echo base_url();?>"+"index.php/mycontroller/productonchange",
          'datatype':"json",
          'data':{name:val3},
          'success':function(data){
            alert(data);
            $('#prd').empty();
            var abc=JSON.parse(data);
            alert(data);
            var toappend="<tr><th>Sl No:</th><th>Product</th><th>Description</th><th>Color</th><th>Selling Price</th><th>Buying price</th><th>Images</th><th>Stock</th></tr>";
            for (var i = 0; i <=abc.length-1; i++) {
              toappend+="<tr><td>"+abc[i].pk_int_productid+"</td><td>"+abc[i].product_name+"</td><td>"+abc[i].descreption+"</td><td>"+abc[i].colour+"</td><td>"+abc[i].selling_price+"</td><td>"+abc[i].buying_price+"</td><td>"+abc[i].product_image+"</td><td>"+abc[i].stock+"</td></tr>";
            };
            $('#prd').append(toappend);
          }


        });
}

  </script>
	<title>product</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row" id ="div1">
            <div class="col-sm-6 col-sm-offset-2">
                  <div class="panel panel-default">
                  	<div class="panel-heading">
      
                 		<span><b><center>View Product</b></center></span></div>
                 		 <div class="panel-body">
                      <form class="form-horizontal"name=""action=""method="post">

                          
                                 <div class="form-group">
                              <label  class="col-sm-3 control-label"> Category Name:</label>
                                 <div class="col-sm-7">
                                   <select class="form-control"name="pcatname" onchange="product()" id="pcatname">
                                    <option>select category</option>
                                     <?php

                                     foreach ($category as $row )
                                      {
                                      echo '<option value="'.$row->pk_int_category_id.'">'.$row->category_name.'</option>';
                                     }
                                     ?>
                                   </select>
                                 </div>
                               </div>
                               <div class="form-group">
                              <label  class="col-sm-3 control-label"> Sub Category Name:</label>
                                 <div class="col-sm-7">
                                   <select class="form-control"name="productsub"onChange="move()"id="ppsub">
                                   <option>select subcategory</option>
                                   
                                   
                                     
                                   </select>
                                 </div>
                               </div>
                                <div class="form-group">
                              
                                 <div class="col-sm-7 col-sm-offset-1">
                                   <table class="table table-striped table table-bordered" id="prd">
                                         
                                        </table>
                                 </div>
                               </div>







                                  </form>
                                </div>


    </div>
        </div> 
            </div>
                  </div>                

</body>
</html>