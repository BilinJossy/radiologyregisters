<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\register;
use App\Models\studydetails;
use App\Models\xray;
use App\Models\carm;
use App\Models\bmd;
use App\Models\mg;
use App\Models\us;
use App\Models\ct;
use App\Models\mri;
use App\Models\fluro;
use App\Models\redos;




class testcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addxray($id)
    {
        return view('xray',compact('id'));
    }

    public function addxray1(Request $request)
    {
        $sid=request('sid');
        $description=request('description');
        

        $this->validate($request,[
            'description'=>'required',
            
            
        ]);

        $c=new xray();

        // $l=new login();
        $c->sid=$sid;
        $c->description=$description;
        


        $c->save();
        
        
        if($c)
             {
               
                // $i=register::select('name')->where('email','like',"$cmail")->first();
                // $request->session()->put('sname',$i);

                echo "<script>alert('Success.. Xray details Added.....');window.location='/plist/slist/$sid';</script>"; 
             }
             else{
                echo "<script>alert('Went Wrong! Add Again.......');window.location='/addxray/$sid';</script>"; 
             }
    }

    public function addcarm($id)
    {
        return view('carm',compact('id'));
    }

    public function addcarm1(Request $request)
    {
        $sid=request('sid');
        $exposurecount=request('exposurecount');
        $exposuretime=request('exposuretime');
        

        $this->validate($request,[
            'exposurecount'=>'required',
            'exposuretime'=>'required'
            
        ]);

        $c=new carm();

        // $l=new login();
        $c->sid=$sid;
        $c->exposurecount=$exposurecount;
        $c->exposuretime=$exposuretime;


        $c->save();
        
        
        if($c)
             {
               
                // $i=register::select('name')->where('email','like',"$cmail")->first();
                // $request->session()->put('sname',$i);

                echo "<script>alert('Success.. CARM details Added.....');window.location='/plist/slist/$sid';</script>"; 
             }
             else{
                echo "<script>alert('Went Wrong! Add Again.......');window.location='/addcarm/$sid';</script>"; 
             }
    }
    public function addbmd($id)
    {
        return view('bmd',compact('id'));
    }

    public function addbmd1(Request $request)
    {
        $sid=request('sid');
        $description=request('description');
        

        $this->validate($request,[
            'description'=>'required',
            
            
        ]);

        $c=new bmd();

        // $l=new login();
        $c->sid=$sid;
        $c->description=$description;
        


        $c->save();
        
        
        if($c)
             {
               
                // $i=register::select('name')->where('email','like',"$cmail")->first();
                // $request->session()->put('sname',$i);

                echo "<script>alert('Success.. BMD details Added.....');window.location='/plist/slist/$sid';</script>"; 
             }
             else{
                echo "<script>alert('Went Wrong! Add Again.......');window.location='/addbmd/$sid';</script>"; 
             }
    }

    public function addmg($id)
    {
        return view('mg',compact('id'));
    }

    public function addmg1(Request $request)
    {
        $sid=request('sid');
        $description=request('description');
        

        $this->validate($request,[
            'description'=>'required',
            
            
        ]);

        $c=new mg();

        // $l=new login();
        $c->sid=$sid;
        $c->description=$description;
        


        $c->save();
        
        
        if($c)
             {
               
                // $i=register::select('name')->where('email','like',"$cmail")->first();
                // $request->session()->put('sname',$i);

                echo "<script>alert('Success.. MG details Added.....');window.location='/plist/slist/$sid';</script>"; 
             }
             else{
                echo "<script>alert('Went Wrong! Add Again.......');window.location='/addmg/$sid';</script>"; 
             }
    }

    public function addus($id)
    {
        return view('us',compact('id'));
    }

    public function addus1(Request $request)
    {
        $sid=request('sid');
        $reportdispatch=request('reportdispatch');
        $stenographer=request('stenographer');
        

        $this->validate($request,[
            'reportdispatch'=>'required',
            'stenographer'=>'required'
            
        ]);

        $c=new us();

        // $l=new login();
        $c->sid=$sid;
        $c->reportdispatch=$reportdispatch;
        $c->stenographer=$stenographer;


        $c->save();
        
        
        if($c)
             {
               
                // $i=register::select('name')->where('email','like',"$cmail")->first();
                // $request->session()->put('sname',$i);

                echo "<script>alert('Success.. US details Added.....');window.location='/plist/slist/$sid';</script>"; 
             }
             else{
                echo "<script>alert('Went Wrong! Add Again.......');window.location='/addus/$sid';</script>"; 
             }
    }

    public function addct($id)
    {
        return view('ct',compact('id'));
    }

    public function addct1(Request $request)
    {
        $sid=request('sid');
        $weight=request('weight');
        $contrast=request('contrast');
        $creatine=request('creatine');
        $kV=request('kV');
        $mAs=request('mAs');
        $dose=request('dose');
      
        $this->validate($request,[
            'weight'=>'required',
            'contrast'=>'required',
            'creatine'=>'required',
            'kV'=>'required',
            'mAs'=>'required',
            'dose'=>'required'
        ]);

        $c=new ct();

        // $l=new login();
        $c->sid=$sid;
        $c->weight=$weight;
        $c->contrast=$contrast;
        $c->creatine=$creatine;
        $c->kV=$kV;
        $c->mAs=$mAs;
        $c->dose=$dose;

        $c->save();
        
        
        if($c)
             {
               
                // $i=register::select('name')->where('email','like',"$cmail")->first();
                // $request->session()->put('sname',$i);

                echo "<script>alert('Success.. US details Added.....');window.location='/plist/slist/$sid';</script>"; 
             }
             else{
                echo "<script>alert('Went Wrong! Add Again.......');window.location='/addct/$sid';</script>"; 
             }
    }

    public function addmri($id)
    {
        return view('mri',compact('id'));
    }

    public function addmri1(Request $request)
    {
        $sid=request('sid');
        $weight=request('weight');
        $contrast=request('contrast');
        $creatine=request('creatine');
      
        $this->validate($request,[
            'weight'=>'required',
            'contrast'=>'required',
            'creatine'=>'required',
        ]);

        $c=new mri();

        // $l=new login();
        $c->sid=$sid;
        $c->weight=$weight;
        $c->contrast=$contrast;
        $c->creatine=$creatine;
        

        $c->save();
        
        
        if($c)
             {
               
                // $i=register::select('name')->where('email','like',"$cmail")->first();
                // $request->session()->put('sname',$i);

                echo "<script>alert('Success.. US details Added.....');window.location='/plist/slist/$sid';</script>"; 
             }
             else{
                echo "<script>alert('Went Wrong! Add Again.......');window.location='/addmri/$sid';</script>"; 
             }
    }

    public function addfluro($id)
    {
        return view('fluro',compact('id'));
    }

    public function addfluro1(Request $request)
    {
        $sid=request('sid');
        $description=request('description');
        

        $this->validate($request,[
            'description'=>'required',
            
            
        ]);

        $c=new fluro();

        // $l=new login();
        $c->sid=$sid;
        $c->description=$description;
        


        $c->save();
        
        
        if($c)
             {
               
                // $i=register::select('name')->where('email','like',"$cmail")->first();
                // $request->session()->put('sname',$i);

                echo "<script>alert('Success.. Fluro details Added.....');window.location='/plist/slist/$sid';</script>"; 
             }
             else{
                echo "<script>alert('Went Wrong! Add Again.......');window.location='/addfluro/$sid';</script>"; 
             }
    }


    public function addredos($id)
    {
        return view('redos',compact('id'));
    }

    public function addredos1(Request $request)
    {
        $sid=request('sid');
        $error=request('error');
        $correctiveaction=request('correctiveaction');
        $correctedby=request('correctedby');
      
        $this->validate($request,[
            'error'=>'required',
            'correctiveaction'=>'required',
            'correctedby'=>'required',
        ]);

        $c=new redos();

        // $l=new login();
        $c->sid=$sid;       
        $c->error=$error;
        $c->correctiveaction=$correctiveaction;
        $c->correctedby=$correctedby;
        

        $c->save();
        
        
        if($c)
             {
               
                // $i=register::select('name')->where('email','like',"$cmail")->first();
                // $request->session()->put('sname',$i);

                echo "<script>alert('Success.. US details Added.....');window.location='/plist/slist/$sid';</script>"; 
             }
             else{
                echo "<script>alert('Went Wrong! Add Again.......');window.location='/addredos/$sid';</script>"; 
             }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listxray()
    {
        $data=xray::all();
        return view('listxray', compact('data'));
    }

    public function listcarm()
    {
        $data=carm::all();
        return view('listcarm', compact('data'));
    }

    public function listfluro()
    {
        $data=fluro::all();
        return view('listfluro', compact('data'));
    }

    public function listmri()
    {
        $data=mri::all();
        return view('listmri', compact('data'));
    }

    public function listct()
    {
        $data=ct::all();
        return view('listctscan', compact('data'));
    }

    public function listus()
    {
        $data=us::all();
        return view('listus', compact('data'));
    }

    public function listmg()
    {
        $data=mg::all();
        return view('listmg', compact('data'));
    }

    public function listbmd()
    {
        $data=bmd::all();
        return view('listbmd', compact('data'));
    }

    public function listredos()
    {
        $data=redos::all();
        return view('listredos', compact('data'));
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
