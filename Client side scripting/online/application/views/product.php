<html>
<head>
  <script type="text/javascript">
function hai()
 {

  var val=$('#catname').val();
  
        $.ajax({
          'type':"POST",
          'url':"http://api.baabtra.com/online_services/index.php/Mycontroller/prosub",
          'datatype':"json",
          'data':{name:val},
          'success':function(data){
            
            $('#sb').empty();
            var abc=JSON.parse(data);
            var toappend='';
            for (var i = 0; i <=abc.length-1; i++) {
              toappend+="<option value='"+abc[i].pk_int_subcategory_id+"'>"+abc[i].subcat_name+"</option>";
            };
            $('#sb').append(toappend);
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
      
                 		<span><b><center>ADD PRODUCT</b></center></span></div>
                 		 <div class="panel-body">
                      <form class="form-horizontal"name=""action="product" method="post" enctype="multipart/form-data">

                          
                                 <div class="form-group">
                              <label  class="col-sm-3 control-label"> Category Name:</label>
                                 <div class="col-sm-7">
                                   <select class="form-control"name="pcatname" onchange="hai()" id="catname">
                                    <option>select</option>
                                     <?php

                                     foreach ($pcat as $row )
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
                                   <select class="form-control"name="pscatname"id="sb">
                                   <!-- <option>select</option> -->
                                    
                                     
                                   </select>
                                 </div>
                               </div>
                                <?php
                                if(isset($error))
                                  echo $error;
                                ?>
                                <div class="form-group">
                              <label  class="col-sm-3 control-label">Product Name:</label>
                                 <div class="col-sm-7">
                                   <input type="text"class="form-control"required name="pname">
                                 </div>
                               </div>
                               <div class="form-group">
                              <label  class="col-sm-3 control-label">Description:</label>
                                 <div class="col-sm-7">
                                  <textarea type="text"class="form-control"required name="pdes"></textarea>
                                 </div>
                               </div>
                               <div class="form-group">
                              <label  class="col-sm-3 control-label">Color:</label>
                                 <div class="col-sm-7">
                                   <input type="text"class="form-control"required name="pcolor">
                                 </div>
                               </div>
                               <div class="form-group">
                              <label  class="col-sm-3 control-label">Selling Price:</label>
                                 <div class="col-sm-7">
                                   <input type="text"class="form-control"required name="fsprice">
                                 </div>
                               </div>
                                <div class="form-group">
                              <label  class="col-sm-3 control-label">Buying Price:</label>
                                 <div class="col-sm-7">
                                   <input type="text"class="form-control"required name="fbprice">
                                 </div>
                               </div>
                                <div class="form-group">
                              <label  class="col-sm-3 control-label">Image:</label>
                                 <div class="col-sm-7">
                                   <input type="file"class="form-control"required name="img">
                                   
                                 </div>
                               </div>
                               
                               
                               <div class="form-group">
                              <label  class="col-sm-3 control-label">Stock:</label>
                                 <div class="col-sm-7">
                                   <input type="number"class="form-control"required name="pstock">
                                 </div>
                               </div>
                               
                         
                                 <div class="form-group last">
                                       <div class="col-sm-offset-5 col-sm-7">
                                        <input type="submit" data-target="#addproduct" data-toggle="modal" class="btn btn-primary btn-mini "value="ADD"name="sub">
                                         </div>
                                           

                                  </form>
                                </div>


    </div>
        </div> 
            </div>
                  </div>   


                   <!-- Modal -->
  <div class="modal fade" id="addproduct" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Message</h4>
        </div>
        <div class="modal-body">
          <p>Your product has been added successfully</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
      </div>
      
    </div>
  </div>         		

</body>
</html>