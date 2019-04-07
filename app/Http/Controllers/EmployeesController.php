<?php

namespace App\Http\Controllers;
use App\Employee as Employee;
use App\Division as Division;
use App\Position as Position;
use App\Particular as Particular;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $employees = Employee::orderBy('id','DESC')->get();
        $divisions = Division::all();
        $positions = Position::all();
        $particulars = Particular::all();
        
        return view('src/modules-crud',compact('employees','positions','divisions','particulars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
         $employees = Employee::create($request->all());
 
           if($employees){

             $notification = "Success";

           } else{
             $notification = "Failed";
           }

           return json_encode(array('notify'=>$notification)); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function compareID( Request $request )
    {
        
        if ( Employee::where('employee_id', $request['employeeID'])->exists() ) {
            $notification = "Success";
        }else{
            $notification = "Failed";
        }

        return json_encode(array( 'notify' => $notification ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $updateEmployee = Employee::where( 'id', $request['id'] )
                              ->update($request->except('_token'));
                            
           if( $updateEmployee ){

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

         return json_encode( array( 'notify'=>$notification ) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
