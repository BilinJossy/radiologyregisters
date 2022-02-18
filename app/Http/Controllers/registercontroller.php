<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class registercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        $employeepassword1=md5($employeepassword);
        
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
               
                // $i=register::select('name')->where('email','like',"$cmail")->first();
                // $request->session()->put('sname',$i);

                echo "<script>alert('Success.. User Added.....');window.location='/';</script>"; 
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

    public function check(Request $request)
    {
        $employeeid=request('employeeid');
        $employeepass=request('employeepass');
        $employeepassword1=md5($employeepass);
        $this->validate($request,[
            'employeeid'=>'required',
            'employeepass'=>'required|min:5|max:15',
        ]);
        $u=register::select('employee_id')->where('employee_id','like',"$employeeid")->first();
        
        if($employeeid=='admin'&& $employeepass=='admin')
        {
           
            $request->session()->put('sname','admin');
            echo "<script>alert('Successfully Logined,Welcome');window.location='/AHome';</script>";
            
        }
        else if(!$u)
        {
            echo "<script>alert('Something went Wrong,Invalid User');window.location='/';</script>";
        }
        else
        {
        //echo $u->mailid;
        $p=register::select('employee_password')->where('employee_id','like',"$u->employee_id")->first();
        //echo $p->password;
        
        
            if($p->employee_password == $employeepassword1)
            {
                $ut=register::select('user_type')->where('employee_id','like',"$u->employee_id")->first();
             if($ut->user_type=='radiologist')
                {
                    $i=register::select('employee_id')->where('employee_id','like',"$employeeid")->first();
                    echo "<script>alert('Successfully Logined,Welcome');window.location='/plist';</script>"; 
                }
            }
             else
            {
                echo "<script>alert('Something went Wrong,Invalid User');window.location='/';</script>";
            }
        }
        
    }

    public function logout()
    {
        // if(session()->has('loggeduser'))
        // {
        //     session()->pull('loggeduser');
        //     session()->flush();
            
        // }
        return redirect('/');
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