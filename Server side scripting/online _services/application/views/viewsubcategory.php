<html>
<head>
  <style type="text/css">
table
{
  margin-left: 46px;
}

  </style>
  <script type="text/javascript">
  function displaysub()
 {

  var val1=$('#viewcat').val();
   
        $.ajax({
          'type':"POST",
          'url':"<?php echo base_url();?>"+"index.php/mycontroller/desplaysub",
          'datatype':"json",
          'data':{name:val1},
          'success':function(data){
            
            $('#ac').empty();
            var abc=JSON.parse(data);
            var toappend="<tr><th>"+'Sl No:'+"</th><th>"+'Subcategory'+"</th><th>"+'Description'+"</th></tr>";
            for (var i = 0; i <=abc.length-1; i++) {
              toappend+="<tr><td>"+abc[i].pk_int_subcategory_id+"</td><td>"+abc[i].subcat_name+"</td><td>"+abc[i].subcatedes+"</td></tr>";
            };
            $('#ac').append(toappend);
          }


        });
}


  </script>
  <style>
  </style>
	<title>addsubcategory</title>
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
                  		<span><b><center>View Sub Category</b></center></span></div>
                  		 <div class="panel-body">
                          	 <form class="form-horizontal"name=""action=""method="post">
                             
                                     
                                   
                                <div class="form-group">
                              <label  class="col-sm-3 control-label"> Category Name:                                      
                              </label>
                                 <div class="col-sm-7">
                                   <select class="form-control"name="catname"onChange="displaysub()"id="viewcat">
                                   <option>select</option>
                                    
                                     <?php
                                     foreach ($vsb as $row )
                                      {
                                        

                                       echo '<option value="'.$row->pk_int_category_id.'">'.$row->category_name.'</option>';
                                       
                                     }
                                     ?>
                                   </select>
                                 </div>
                               </div>
                                <div class="form-group">
                              
                                 <div class="col-sm-7 col-sm-offset-2">
                                   <table class="table table-striped table table-bordered" id="ac">

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