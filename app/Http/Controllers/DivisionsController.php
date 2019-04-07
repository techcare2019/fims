<?php

namespace App\Http\Controllers;
use App\Division as Division;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DivisionsController extends Controller
{
     //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$divisions = Division::orderBy('id','DESC')->get();
    	return view('src/modules-crud',compact('divisions'));
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
        $divisions = Division::create($request->all());
 
           if($divisions){

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
        $updateDivision = Division::where( 'id', $request['id'] )
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
   
           if( $updateDivision ){

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

         return json_encode( array( 'notify'=>$notification ) );
    }

}
