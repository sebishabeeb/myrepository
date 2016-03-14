<style type="text/css">
#txt1
{
  margin-left:118px;
  width:367px;
  margin-top:-24px;
  position:absolute;
}

/*button
{
  margin-left: 7px;
    margin-bottom: 4px;
}*/
</style>


<script type="text/javascript">
function fun1(v)
 {
    //alert(v);
        $.ajax({
          'type':"POST",
          'url':"<?php echo base_url();?>"+"index.php/mycontroller/updatecat",
          'datatype':"json",
          'data':{name:v},
          'success':function(data){
          
           
            $('#show').empty();
            var abc=JSON.parse(data);
            var toappend='';
            for (var i = 0; i <=abc.length-1; i++) {
              toappend+="<input type='hidden'id='txt' name='cid' value='"+abc[i].pk_int_category_id+"'><label>Name:</label><input type='text'id='txt1'class='form-control'name='cname' placeholder='"+abc[i].category_name+"'><br><label style='margin-top:35px;position:absolute;'>Desceiption:</label><input type='text'style='margin-left: 117px;width:368px;position:absolute;margin-top:34px;'class='form-control'name='cdes'placeholder='"+abc[i].description+"'><button type='submit'style='margin-left:118px;position:absolute;margin-top:80px;' class='btn btn-primary'>Update</button>";
            };
            $('#show').append(toappend);
          }


        });
}

        function delfunnm(va)
     {
         alert(va);
        $.ajax({
          'type':"POST",
          'url':"<?php echo base_url();?>"+"index.php/mycontroller/deletecatnm",
          'datatype':"json",
          'data':{name:va},
          'success':function(data){
            if (data=="yes") {alert("there is an error");}
            else{setInterval('refresh()',1000);}
}
});
}


    function refresh()
    {
    window.location.reload();
    }
</script>
<div class="col-sm-offset-2 col-sm-6 ">
   <table class="table table-striped table table-bordered">
   	<tr>
         <th>Sl No.</th><br>
         <th>Category</th>
         <th colspan="3">Desceiption</th>
         



   	</tr>
   	<?php
   	foreach ($edt as $row ) 
     	{
     		echo "<tr>";
        
     
   		  echo "<td>".$row->pk_int_category_id."</td><td>".$row->category_name."</td><td>".$row->description."</td>";
        echo "<td><button type='submit' class='btn btn-link' onClick='fun1(this.value)' value='".$row->pk_int_category_id."' id='".$row->pk_int_category_id."'>Edit</button></td><td><button type='submit' class='btn btn-link'  onclick='delfunnm(this.value)' value='".$row->pk_int_category_id."' id='".$row->category_name."'>Delete</button></td>";
   		  echo "</tr>";
          
     	}
   	?>
     



   </table><br>
<div  class="col-sm-offset-2 col-sm-6 ">
  <form action="updateinput" method="post">
    <div id="show"></div>
  </form>
</div>
</div>                                                                                                                                                                                                        