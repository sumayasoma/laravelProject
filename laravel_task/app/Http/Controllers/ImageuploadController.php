<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

//use Storage;
use \Input as Input;
class ImageuploadController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		 if(Input::hasFile('file')){

            $file = Input::file('file');
            $file->move('uploads',$file->getClientOriginalName());
            //$path = public_path().'/uploads/';
            //return $file->move($path, $filename);
            echo '<img src="uploads/'.$file->getClientOriginalName().'"/>';
        }
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
*/

/*public function upload(Request $request)
    {




    $files = $request->file('file');
         if(!empty($files)):
          foreach($files as $file):
        Storage::put($file->getClientOriginalName(),file_get_contents($file));
        endforeach;
        endif;

	}*/


	 public function imageuploads(Request $request)
    {
      
         if(Input::hasFile('file')){

            $file = Input::file('file');
            $file->move('uploads',$file->getClientOriginalName());
            //$path = public_path().'/uploads/';
            //return $file->move($path, $filename);
            echo '<img src="uploads/'.$file->getClientOriginalName().'"/>';
        }
       

    }

	public function store(Request $request)
	{
		 if(Input::hasFile('image')){

            $file = Input::file('image');
            $file->move('uploads',$file->getClientOriginalName());
            //$path = public_path().'/uploads/';
            //return $file->move($path, $filename);
            echo '<img src="uploads/'.$file->getClientOriginalName().'"/>';
        }
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
