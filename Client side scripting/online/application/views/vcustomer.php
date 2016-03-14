<script type="text/javascript">

function avoid(jilshad)
{
  $.ajax({
    'type':"post",
     'url':"http://api.baabtra.com/online_services/index.php/Mycontroller/suspendcus",
    'datatype':"json",
    'data':{name:jilshad},
    
    'success':function(data){
      alert(data);
      if (data=="0") {alert("successfully Suspended");}
            else{setInterval('reloadsub()',1000);}
    }
  })
}
function reloadsub()
    {
    window.location.reload();
    }



</script>

<div class="col-sm-offset-1 col-sm-11 ">
  <!-- <div class="form-horizontal"> -->
  <div class="panel panel-default">
   <div class="panel-heading">

                      <span><b><center>Customers</b></center></span></div>

   <table class="table table-striped table table-bordered">
   	<tr>
         <th>Sl No.</th><br>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Address</th>
         <th>DOB</th>
         <th>Gender</th>
         <th>Phone</th>
         <th>Country</th>
         <th>Reg.Date</th>
         <th>Status</th>
         <th colspan="2"></th>


   	</tr>
   	<?php
   	foreach ($vreg as $row ) 
     	{
     		echo "<tr>";
        
     
   		  echo "<td>".$row->pk_int_reg_id."</td><td>".$row->first_name."</td><td>".$row->last_name."</td><td>".$row->address."</td><td>".$row->dob."</td><td>".$row->gender."</td><td>".$row->phone."</td><td>".$row->country."</td><td>".$row->date_of_reg."</td><td>".$row->vchr_status."</td><td><button type='submit'onclick='avoid(this.value)' value='".$row->pk_int_reg_id."'class='btn btn-primary'>SUSPEND</button></td>";
        
   		  echo "</tr>";
          
     	}
   	?>
     



   </table>

</div></div></div><br><br>