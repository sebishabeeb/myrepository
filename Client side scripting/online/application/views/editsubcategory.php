<html>
<head>
  <style type="text/css">
table
{
   margin-left: -89px;
    margin-top: 18px;

}
#txt
{
      margin-left: 257px;
    width: 235px;
    height: 38px;
}

  </style>
  <script type="text/javascript">

  function aswathy()
 {
      //alert("hi");
      var v3 = $('#viewsubcat').val();
      //alert(v3);
        $.ajax({
          'type':"POST",
          'url':"http://api.baabtra.com/online_services/index.php/Mycontroller/desplaysub",
          'datatype':"json",
          'data':{name:v3},
          'success':function(data){
            //alert(data);
            $('#ac').empty();

            var abc=JSON.parse(data);//decode


            var toappend="<tr><th> Sl No: </th><th> Subcategory </th><th>Description</th><th colspan='2'></th></tr>";
            for (var i = 0; i <=abc.length-1; i++) {
              toappend+="<tr><td>"+abc[i].pk_int_subcategory_id+"</td><td>"+abc[i].subcat_name+"</td><td>"+abc[i].subcatedes+"<td><button class='btn btn-link' onclick='dispform(this.value)' value='"+abc[i].pk_int_subcategory_id+"'>Edit</button></td><td><button class='btn btn-link' onclick='deletesub(this.value)' value='"+abc[i].pk_int_subcategory_id+"' id='"+abc[i].subcat_name+"'>Delete</button></td></tr>";
            };
            $('#ac').append(toappend);
          }


        });
}


function dispform(z)
 {
    //alert(z);
        $.ajax({
          'type':"POST",
          'url':"http://api.baabtra.com/online_services/index.php/Mycontroller/updatesubcatshow",
          'datatype':"json",
          'data':{name:z},
          'success':function(data){
          
           //alert(data);
            $('#show').empty();

            var abc=JSON.parse(data);

            
            var toappend='';
            for (var i = 0; i <=abc.length-1; i++) {

              toappend+="<input type='hidden' name='scid' value='"+abc[i].pk_int_subcategory_id+"'><label style='position:absolute;margin-left:-380px;margin-top:183px;'>Name:</label><input type='text'class='form-control' name='ssname' id='txt' placeholder='"+abc[i].subcat_name+"'><br><label style='position:absolute; margin-left:141px;margin-top:9px;'>Description:</label><input type='text'id='txt'class='form-control'name='sdes'placeholder='"+abc[i].subcatedes+"'><br><button type='submit' class='btn btn-primary'style='margin-left:326px;'>Update</button>";
            };
            $('#show').append(toappend);
          }


        });
}

        function deletesub(vb)
     {
         //alert(vb);
        $.ajax({
          'type':"POST",
          'url':"http://api.baabtra.com/online_services/index.php/Mycontroller/removesub",
          'datatype':"json",
          'data':{name:vb},
          'success':function(data){

            if (data=="yes") {alert("there is an error");}
            else{setInterval('reloadsub()',1000);}
}
});
}


    function reloadsub()
    {
    window.location.reload();
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
                      <span><b><center>Edit Sub Category</b></center></span></div>
                       <div class="panel-body">
                             
                             
                                     
                                   
                                <div class="form-group">
                              <label  class="col-sm-3 control-label"> Category Name:                                      
                              </label>
                                 <div class="col-sm-7">

                                   <select class="form-control" name="catname" onChange="aswathy()" id="viewsubcat">
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
                                    
                                 </div><br><br>
                                 
                                 

                               </div>
                               <form class="form-horizontal"name=""action="updatesubinput"method="post">
                                <div id="show">
                                 </div>

                           </form>
                         </div> 
                         
                         </div>
                         </div>
                         </div>
                         </div> 






</body>
</html>