<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class DevController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//echo "ok";
		$result=DB::table('pms_developers')->get();	
		//print_r($result);	
		return view('dev.developers')->with('developers',$result);	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		$post=$request->all();
		
		//print_r($post);
		
		$data=array(
		   'code'=>$post["txtCode"],
		   'name'=>$post["txtName"],
		   'designation'=>$post["txtDesignation"],
		   'job_desc'=>$post["txtJobDesc"]
		   	
		);
		
		$i=DB::table('pms_developers')->insert($data);
		
		if($i>0){
		
		 return redirect('dev/');	
		
		}
	}

     public function assign(Request $request)
	{
		$post=$request->all();
		
		//print_r($post);
		
		$data=array(
		   'project_id'=>$post["cmbProjectId"],
		   'dev_id'=>$post["cmbDeveloperId"],
		   'job_desc'=>$post["txtJobDesc"],
		   'assigned_on'=>$post["txtStartDate"]
		   	
		);
		
		$i=DB::table('pms_project_dev')->insert($data);
		
		if($i>0){
		
		 return redirect('dev/');	
		
		}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
