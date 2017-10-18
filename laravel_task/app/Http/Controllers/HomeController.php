<?php namespace App\Http\Controllers;
use DB;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		/*
		$levcat=DB::table('leave_category')->get();
		$emp_leave=DB::table('employee')
		->join('employee_leave', 'employee.id', '=', 'employee_leave.emp_id')
		->join('leave_category', 'leave_category.id', '=', 'employee_leave.category_id')
		->select('employee_leave.*','employee.name as employee_name','leave_category.name as category_name')->get();
		
		 $deptlev = DB::table('department')
            ->join('dept_leave', 'department.id', '=', 'dept_leave.dept_id')
            ->join('leave_category', 'leave_category.id', '=', 'dept_leave.category_id')
			->select('dept_leave.*', 'department.name as department_name', 'leave_category.name as catagory_name')
            ->get();
			
				
		
		return view('home')
		
		->with('leavecat',$levcat)
		->with('emp_leaves',$emp_leave)
		->with('deptleaves',$deptlev);

		*/
		
	}

}
