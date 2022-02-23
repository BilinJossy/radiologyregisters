<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\register;

class managercontroller extends Controller
{
    public function store(Request $request)
    {
        $employeeid=request('employeeid');
        $employeename=request('employeename');
        $employeemail=request('employeemail');
        $employeepassword=request('employeepassword');
        $employeeconfirmpassword=request('employeeconfirmpassword');

        $this->validate($request,[
            'employeeid'=>'required',
            'employeename'=>'required',
            'employeemail'=>'required|email',
            'employeepassword'=>'required|min:5|max:15',
            'employeeconfirmpassword'=>'required|min:5|max:15'
        ]);

        if($employeepassword == $employeeconfirmpassword){
        
        $employeepassword1=Hash::make($employeepassword);
        
        $c=new register();

        // $l=new login();

        $c->employee_id=$employeeid;
        $c->employee_name=$employeename;
        $c->employee_mail=$employeemail;
        $c->employee_password=$employeepassword1;
        $c->user_type="radiologist";
        $c->employee_isactive="1";


        $c->save();
        // $l->save();
        //echo "added";
        
        if($c)
             {
               
                $i=register::select('employee_id')->where('employee_id','like',"$employeeid")->first();
                echo "<script>alert('Success.. User Added.....');window.location='/staff';</script>"; 
             }
             else{
                echo "<script>alert('Something went Wrong.......');window.location='/reg';</script>"; 
             }

       


        //return view('index');


        }
        else{
            echo "<script>alert('Password is not correct......');window.location='/reg';</script>"; 
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewstaff(Request $request)
    {       
            $search_text = $request->get('staff');
            //dd($search_text);
            $data = ($search_text != null ) ? register::where('employee_name','LIKE','%'.$search_text.'%')->paginate(10) : register::paginate(10);
            return view('staffs', compact('data','search_text'));
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
    public function update(Request $request, $id)
    {
        //
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
