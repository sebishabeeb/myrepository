
<div class="col-sm-offset-2 col-sm-6 ">
   <table class="table table-striped table table-bordered">
   	<tr>
         <th>Sl No.</th><br>
         <th>Category</th>
         <th>Desceiption</th>



   	</tr>
   	<?php
   	foreach ($vcat as $row ) 
     	{
     		echo "<tr>";
        
     
   		  echo "<td>".$row->pk_int_category_id."</td><td>".$row->category_name."</td><td>".$row->description."</td>";
        
   		  echo "</tr>";
          
     	}
   	?>
     



   </table><br><br><br><br>

</div>