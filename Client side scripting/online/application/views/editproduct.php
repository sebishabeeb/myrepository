

<html>
<script type="text/javascript">

$(document).ready(function(){

  $('#divr').hide();

});

function edtp()
 {
  var ss=$('#edtpro').val();
  //alert(ss);
  $.ajax({
    'type':"POST",

    'url':"http://api.baabtra.com/online_services/index.php/Mycontroller/changesub",
    'datatype':"JSON",
    'data':{name:ss},
    'success':function(data){
      //alert(data);
      $('#prd').empty();
      var asd=JSON.parse(data);
    
      var toappend="<option>selesct subcategory</option>";
      for (var i = 0; i <=asd.length-1; i++)
       {
        toappend+="<option value='"+asd[i].pk_int_subcategory_id+"'>"+asd[i].subcat_name+"</option>";
       
     };
     $('#prd').append(toappend);

    }
  
  })
}
function showtable()
{
  var tb=$('#prd').val();
  
  $.ajax({
    'type':"POST",
    'url':"http://api.baabtra.com/online_services/index.php/Mycontroller/productonchange",
    'datatype':"JSON",
   'data':{name:tb},
    'success':function(data){
$('#tbl').empty();
var sebi=JSON.parse(data);
var toappend="<tr><th>Sl no:</th><th>product Name</th><th>Description</th><th>Color</th><th>Selling Price</th><th>Buying Price</th><th>Images</th><th colspan='2'></th></tr>";
for (var i = 0; i <=sebi.length-1; i++)
 {
  toappend+="<tr><td>"+sebi[i].pk_int_productid+"</td><td>"+sebi[i].product_name+"</td><td>"+sebi[i].descreption+"</td><td>"+sebi[i].colour+"</td><td>"+sebi[i].selling_price+"</td><td>"+sebi[i].buying_price+"</td><td>"+sebi[i].product_image+"</td><td><button type='button'class='btn btn-link'  onclick='pedit(this.value)' value='"+sebi[i].pk_int_productid+"'>Edit</button></td><td><button type='button'class='btn btn-link'onclick='dltpro(this.value)'value='"+sebi[i].pk_int_productid+"' id='"+sebi[i].product_name+"'>Delete</button></td></tr>";  
};
$('#tbl').append(toappend);
    }
  })
}

function pedit(nm)
{
  alert(nm);
  $.ajax({

    'type':"POST",
    'url':"http://api.baabtra.com/online_services/index.php/Mycontroller/pkproduct",
    'datatype':"JSON",
    'data':{name:nm},
    'success':function(data){
     // alert(data);
     $('#divr').show();
      $('#showtext').empty();
      var p=JSON.parse(data);
      
     // alert(p); 
      var toappend=''; 
      for (var i = 0; i <=p.length-1; i++) 
       { 
        toappend +="<input type='hidden' name='productid' value='"+p[i].pk_int_productid+"'><label style='margin-left:33px;position:absolute;margin-top:4px;'>Product Name:</label><input type='text'class='form-control' style='width:346px;margin-left:154px;' name='pname' placeholder='"+p[i].product_name+"'><br><label style='position:absolute;margin-left:33px;margin-top:12px;'>Description:</label><textarea class='form-control'style='width:346px;margin-left:154px;'name='pdesc' placeholder='"+p[i].descreption+"'></textarea><br><label style='position:absolute;margin-left:33px;margin-top:3px;'>Color:</label><input type='text'style='width:346px;margin-left:154px;' class='form-control'name='pcolor' placeholder='"+p[i].colour+"'><br><label style='position:absolute;margin-left:33px;margin-top:4px;'>Selling Price:</label><input type='text'style='width:346px;margin-left:154px;' class='form-control'name='fsprice' placeholder='"+p[i].selling_price+"'><br><label style='position:absolute; margin-left:31px;margin-top:7px;'>Buying Price:</label><input type='text'class='form-control'style='position:absolute;margin-left:153px;width:346px;'name='fbprice'placeholder='"+p[i].buying_price+"'><br><label style='position:absolute;margin-top:28px; margin-left:30px;'>Images:</label><input type='text'style='position:absolute;margin-left:153px;margin-top:32px;width: 347px;'class='form-control'name='img'placeholder='"+p[i].product_image+"'><br><br><label style='position:absolute;margin-left:29px;margin-top:48px;'>Stock:</label><input type='text'style='width:346px;margin-left:154px;position:absolute;margin-top:56px;' class='form-control'name='pstock' placeholder='"+p[i].stock+"'><br><input type='submit'style='margin-left: 274px;position:absolute;margin-top: 83px;' name='edit' class='btn btn-primary' value='update'><br><br><br><br><br><br><br>";
       
      };
      $('#showtext').append(toappend);
    }
  })
}
function dltpro(dlt)
{
  
  $.ajax({
   'type':"POST",
   'url':"http://api.baabtra.com/online_services/index.php/Mycontroller/deleteprop",
   'data':{name:dlt},
   'success':function(data){
    
    if (data=="yes") {alert("there is an error");}
            else{setInterval('reloadpro()',1000);}
   }


  })
}
function reloadpro()
    {
    window.location.reload();
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
      
                    <span><b><center>Edit Product</b></center></span></div>
                     <div class="panel-body">
                      <form class="form-horizontal"name=""action=""method="post">

                          
                                 <div class="form-group">
                              <label  class="col-sm-3 control-label"> Category Name:</label>
                                 <div class="col-sm-7">
                                   <select class="form-control"name="pcatname" onchange="edtp()" id="edtpro">
                                    <option>select category</option>
                                     <?php

                                     foreach ($prdctcat as $row )
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
                                   <select class="form-control"name="productsub"onChange="showtable()"id="prd">
                                  
                                   
                                   
                                     
                                   </select>
                                 </div>
                               </div>
                                
                                      </form>
                                
                                



                            
                              
                           </div>
 
    </div>
        </div> 
            </div>
                  </div>  
                  </div>
                  </div>              
<div class="container">
    <div class="row" id ="div2">
            <div class="col-sm-6 col-sm-offset-1">
                  
                    <!-- <div class="panel-body"> -->
                      <div class="form-group">
                              
                                 <div class="col-sm-7 col-sm-offset-2">
                                   <table class="table table-striped table table-bordered" id="tbl"style="margin-left: -64px">
                                         
                                        </table>
                                         </div>
                               </div>
                             
                           
                         </div>
                       </div>
                     </div>
                     <div class="container">
    <div class="row" >
            <div class="col-sm-6 col-sm-offset-1">
                  <!-- <div class="panel panel-default" id="divr"> -->
                     <div class="panel-body"> 
                      <div class="form-group">
                              <div class="col-sm-6 col-sm-offset-1">
                            <form class="form-horizontal" method="post" action="inputpro">
                            <div id="showtext">
                                 </div>
                           </form> 
                                

                           
                           
                                </div>
                                 
                               </div>
                             
                           
                         </div>
                       <!-- </div> -->
                     </div>
                   </div>
                 </div>
</body>
</html>