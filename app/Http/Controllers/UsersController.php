<?php

namespace App\Http\Controllers;
use App\User as User;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$users = User::all();
    	return view('src/modules-crud',compact('users'));
    }

     public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function update(Request $request)
    {
        //
        $updateUser = User::where( 'id', $request['id'] )
                              ->update($request->except('_token'));
                              /*->update([

                                'member_id'=>$request['member_id'],
                                'fname'=>$request['fname'],
                                'mname'=>$request['mname'],
                                'lname'=>$request['lname'],
                                'extension'=>$request['extension'],
                                'date_of_birth'=>$request['date_of_birth'],
                                'marital_status'=>$request['marital_status'],
                                'sex'=>$request['sex'],
                                'home_address'=>$request['home_address'],
                                'email_address'=>$request['email_address'],
                                'contact_number'=>$request['contact_number'],
                                'photo_url'=>$request['photo_url'],
                                'member_type'=>$request['member_type'],
                                'member_status'=>$request['member_status']

                                ]);*/
   
           if( $updateUser ){

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

         return json_encode( array( 'notify'=>$notification ) );
    }

}
