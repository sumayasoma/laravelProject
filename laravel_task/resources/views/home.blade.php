@extends('layout.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
					
                        
                         <div class="panel panel-default">
                                <div class="panel-heading">Leave Catagory</div>
                                <div class="panel-body">
                                  <table class="table">
      <tr><th>ID</th><th>Name</th></tr>
	  <?php
        foreach($leavecat as $lev){
		
		 $token=csrf_token(); 
		 echo "<tr><td>$lev->id</td><td>$lev->name</td></tr>";	
		 	
		}
		?>
        
   </table>
                                </div>
                             </div>
                          
                          <div class="panel panel-default">
                                <div class="panel-heading">Employee leave Details</div>
                                <div class="panel-body">
                                
                                 <table class="table">
      <tr><th>ID</th><th>Employee's Name</th><th>Leave type</th><th>Absent from</th><th>Absent to</th></tr>
	  <?php
        foreach($emp_leaves as $empl){
		
		 $token=csrf_token(); 
		 echo "<tr><td>$empl->id</td><td>$empl->emp_id </td><td>$empl->category_id</td><td>$empl->absent_from</td><td>$empl->absent_to</td></tr>";	
		 	
		}
		
	  
	  ?>   
			
                                 </table>
                                </div>
                             </div>
                                 
               
           <div class="panel panel-default">
				<div class="panel-heading">Deptment leave Details</div>

				<div class="panel-body">
					<table class="table">
						<tr><th>Deptment Name</th>
      <th>Leave Category Name</th>
      <th>Days</th>
      						
                         </tr>
    						<?php
      							foreach($deptleaves as $leave){
		 $token=csrf_token(); 
		 echo "<tr>
		 	   <td>$leave->department_name</td>
		 	   <td>$leave->catagory_name</td>
		 	   <td>$leave->days</td>
		 	   </tr>";	
		 	
								}
	  
	 						?>    
  					</table>				
                 </div>
              </div>         
                    
              
		</div>
	</div>
</div>
@endsection
