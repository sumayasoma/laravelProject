@extends('master')
@section('content')
 <div class="container">
   <form class="form-horizontal" action="{{url('dev/assign')}}" method="post">
      <input type="hidden" name="_token" value="<?php echo csrf_token()?>" />
     
     
      <div class="form-group">
       <label class="control-label col-sm-2">Project</label>
       <div class="col-sm-6">
       <select name="cmbProjectId" class="form-control">
       <?php
	     
         foreach($projects as $project){
			 echo "<option value='$project->id'>$project->description</option>";
	     }
	   ?>
       </select>
       </div>
     </div>
     
     <div class="form-group">
       <label class="control-label col-sm-2">Developer</label>
       <div class="col-sm-6">
       <select name="cmbDeveloperId" class="form-control">
       <?php
	     
         foreach($developers as $dev){
			 echo "<option value='$dev->id'>$project->code $dev->name</option>";
	     }
	   ?>
       </select>
       </div>
     </div>
     
     
     
      <div class="form-group">
       <label class="control-label col-sm-2">Joining Date</label>
       <div class="col-sm-6">
       <input type="text" name="txtStartDate" class="form-control" />
       </div>
     </div>
     
    
       <div class="form-group">
       <label class="control-label col-sm-2">Job Description</label>
       <div class="col-sm-6">
       <textarea type="text" name="txtJobDesc" class="form-control" ></textarea>
       </div>
     </div>
     
     <div class="form-group">
     
       <div class="col-sm-offset-2 col-sm-6">
       <input type="submit" name="btnSubmit"  class="btn btn-primary" value="Submit" />
       </div>
     </div>
   </form>
  
  </div>
@endsection