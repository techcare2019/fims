<?php

namespace App\Http\Controllers;
use App\Position as Position;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PositionsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$positions = Position::all();
    	return view('src/modules-crud',compact('positions'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $positions = Position::create($request->all());
 
           if($positions){

             $notification = "Success";

           } else{
             $notification = "Failed";
           }

           return json_encode(array('notify'=>$notification)); 

         /* if($request->ajax()){
            return json_encode(array('notify'=> $request->all())); 
          }*/
    }

    public function update(Request $request)
    {
        //
        $updatePosition = Position::where( 'id', $request['id'] )
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
   
           if( $updatePosition ){

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

         return json_encode( array( 'notify'=>$notification ) );
    }

}
