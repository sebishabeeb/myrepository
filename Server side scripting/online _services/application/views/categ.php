<html>
<head>
  <script type="text/javascript">

function model(){
  var a= $('#catname').val();
  var b= $('#catdes').val();
alert(a);
alert(b);
$.ajax({
  
 
  'type':"post",
   'url':"<?php echo base_url();?>"+"index.php/Mycontroller/admin",
   'dataType':"json",
   'data':{cat:a,desc:b},
   
   'success':function(data){


   }



});
}


  </script>
	<title>addcategory</title>
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
                  		<span><b><center>ADD CATEGORY</b></center></span></div>
                          <div class="panel-body">
                          	 <!-- <form class="form-horizontal"name="" action=""method="post"> -->

                              <div class="form-group">
                              <label  class="col-sm-3 control-label">Category Name:</label>
                                 <div class="col-sm-7">
                                   <input type="text"class="form-control"required id="catname" name="catname"><br>
                                 </div>
                               </div>
                              <div class="form-group">
                              <label  class="col-sm-3 control-label">Description:</label>
                                 <div class="col-sm-7">
                                  <textarea type="text"class="form-control"required id="catdes" name="catdes"></textarea>
                                 </div>
                               </div>
                               <br><br>
                                <div class="form-group last">
                                       <div class="col-sm-offset-5 col-sm-7">
                                        <button type="button" class="btn btn-primary "value="ADD" data-target="#addproduct" data-toggle="modal" onclick="model()"style ="margin-top:8%">ADD</button>
                                         </div>
                                       </div>
                                     </div>


                              









    </div>
        </div>
             </div>
                   </div>
                   <div class="modal fade" id="addproduct" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content"style="background-color:white;width:53%;margin-left:69%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"style="color:coral;">Message</h4>
        </div>
        <div class="modal-body">
          <p style="color:coral;">Your category has been added successfully</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
      </div>
      
    </div>
  </div>            



</body>
</html>