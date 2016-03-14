<div class="col-sm-offset-1 col-sm-8">
	<table class="table table-striped table table-bordered">
			<tr>
         <th>Sl No.</th><br>
         
       <th>Sub Category</th>
         


   	</tr>
   		<?php
   	foreach ($vsb as $row ) 
     	{
     		echo "<tr>";
        
     
   		  echo "<td>".$row->pk_int_subcategory_id."</td><td>".$row->subcat_name."</td>";
   		  echo "</tr>";
          
     	}
   	?>
     



   </table>
</div>