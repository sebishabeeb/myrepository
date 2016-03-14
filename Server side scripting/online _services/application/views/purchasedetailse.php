<style type="text/css">
h3{
  font-size: xx-large;
    color: crimson;
     font-weight: bolder;
}

span{
  font-size: x-large;
    font-weight: bolder;
    color: crimson;
}


</style>
<script type="text/javascript">
$(document).ready(function()
{
$("#id1").hide();
});

function dtlsofprchs(lid)
{
  $('#id1').show();
//alert(lid);
  $.ajax({

    'type':"POST",
    'url':"<?php echo base_url(); ?>"+"index.php/mycontroller/phs",
    'datatype':"json",
    'data':{name:lid},
    'success':function(data){
      //alert(data);
       var bbc=JSON.parse(data);
      //alert(bbc);
      var toappend="<tr><th>Sl No:</th><th>Product Name</th><th>Amount</th><th>Quantity</th><th>Date</th></tr>";
      for (var i = 0; i < bbc.length; i++) {
            
          toappend+="<tr><td>"+bbc[i].pk_int_purchase_id+"</td><td>"+bbc[i].product_name+"</td><td>"+bbc[i].amount+"</td><td>"+bbc[i].quantity+"</td><td>"+bbc[i].dat_of_purchase+"</td></tr>";

            };
      $('#prchs').append(toappend);
  }
  
});
}



</script>


<div class="col-sm-offset-1 col-sm-11 ">
  <!-- <div class="form-horizontal"> -->
  <div class="panel panel-default">
   <div class="panel-heading">


                      <span><b><center>CUSTOMERS</b></center></span></div>

   <table class="table table-striped table table-bordered">
   	<tr>
         <th>Sl No.</th><br>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Address</th>
        
         <th>Phone</th>
         <th>Country</th>
         
         <th colspan="2"></th>


   	</tr>
   	<?php
   	foreach ($preg as $row ) 
     	{
     		echo "<tr>";
        
     
   		  echo "<td>".$row->pk_int_reg_id."</td><td>".$row->first_name."</td><td>".$row->last_name."</td><td>".$row->address."</td><td>".$row->phone."</td><td>".$row->country."</td><td><button type='submit'onclick='dtlsofprchs(this.value)' value='".$row->fk_int_login_id."'class='btn btn-primary'>Details</button></td>";
        
   		  echo "</tr>";
          
     	}
   	?>
     



   </table>

</div></div></div><br><br>

<div class="col-sm-offset-2 col-sm-8 "id="id1">

  <div class="panel panel-default">
   <div class="panel-heading">
     <div class="jumbotron">

                      <h3><center>Purchase Details</h3></center></div>

  <table class="table table-striped table table-bordered"id="prchs"></table></div></div><div><br>