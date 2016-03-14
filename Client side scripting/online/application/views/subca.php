<html>
<head>
  <script type="text/javascript">
 function msg()
 {
    var sc=$('#scnme').val();
    var sds=$('#scds').val();
    var fkc=$('#catid').val();
    alert(fkc);
    $.ajax({
      'type':"post",
      'datatype':"json",
      'url':"http://api.baabtra.com/online_services/index.php/Mycontroller/addsub",
      data:{scnme:sc,dsc:sds,fkct:fkc},
      'success':function(data){

      }
    })
 }

  </script>
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
                  <span><b><center>Add Sub Category</center></b></span>
              </div>
              <div class="panel-body">
                  <form class="form-horizontal" method="post" action="">
                      <div class="form-group">
                          <label  class="col-sm-3 control-label"> Category Name:</label>
                          <div class="col-sm-7">
                              <select class="form-control"id="catid">
                              <?php
                              foreach ($cat as $row )
                              {
                                  echo '<option value="'.$row->pk_int_category_id.'">'.$row->category_name.'</option>';
                              }
                                     ?>
                              </select>
                            </div>
                      </div>
                      <div class="form-group">
                          <label  class="col-sm-3 control-label">Sub category Name:</label>
                             <div class="col-sm-7">
                                <input type="text"class="form-control"required name="subcname"id="scnme">
                            </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">Description:</label>
                              <div class="col-sm-7">
                                  <textarea type="text"class="form-control"required name="subcdes"id="scds"></textarea>
                              </div>
                      </div>
                      <div class="form-group last">
                          <div class="col-sm-offset-5 col-sm-7">
                              <button class="btn btn-primary  "value="Add"name="sub"data-target="#addsubc" data-toggle="modal"onclick="msg()">Add</button>
                          </div>

                      </div>
                  </form>
            </div>
            </div>
                   </div>

            </div>
                  </div>
                
                   
                    <div class="modal fade" id="addsubc" role="dialog"style="bagroundcolor:red">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content"style="background-color:white;width:53%;margin-left:69%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"style="color:coral;">Message</h4>
        </div>
        <div class="modal-body">
          <h3 style="color:coral;">Your Subcategory Has Been Added Successfully</h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
      </div>
      
    </div>
  </div>            
             






</body>
</html>