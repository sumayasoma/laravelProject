@extends('master')
@section('content')
 <div class="container">
   <form class="form-horizontal" action="{{url('dev/create')}}" method="post">
      <input type="hidden" name="_token" value="<?php echo csrf_token()?>" />
     
     
     <div class="form-group">
       <label class="control-label col-sm-2">Code</label>
       <div class="col-sm-6">
       <input type="text" name="txtCode" class="form-control" />
       </div>
     </div>
     
      <div class="form-group">
       <label class="control-label col-sm-2">Name</label>
       <div class="col-sm-6">
       <input type="text" name="txtName" class="form-control" />
       </div>
     </div>
     
       <div class="form-group">
       <label class="control-label col-sm-2">Designation</label>
       <div class="col-sm-6">
       <input type="text" name="txtDesignation" class="form-control" />
       </div>
     </div>
     
     <div class="form-group">
       <label class="control-label col-sm-2">Job Description</label>
       <div class="col-sm-6">
       <textarea name="txtJobDesc" class="form-control" ></textarea>
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