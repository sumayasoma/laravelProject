@extends('master')
@section('content')
 <div class="container">
  
   <table class="table">
      <tr><th>ID</th><th>Code</th><th>Name</th><th>Designation</th><th>Action</th></tr>
      <?php
        foreach($developers as $dev){
		
		 $token=csrf_token(); 
		 echo "<tr><td>$dev->id</td><td>$dev->code</td><td>$dev->name</td><td>$dev->designation</td><td><a href='dev/edit/$dev->id' class='btn btn-default'>Edit</a> <a href='dev/delete/$dev->id' class='btn btn-default'>Delete</a></td></tr>";	
		 	
		}
	  
	  ?>    
   </table>
  
</div>
@endsection