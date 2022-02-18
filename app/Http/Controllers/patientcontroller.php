<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\register;
use App\Models\studydetails;
use App\Models\xray;
use Carbon\Carbon;

class patientcontroller extends Controller
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
        $tokenno=request('tokenno');
        $uhid=request('uhid');
        $patientname=request('patientname');
        $patientdob=request('patientdob');
        $gender=request('gender');
        
        $this->validate($request,[
            'tokenno'=>'required',
            'uhid'=>'required',
            'patientname'=>'required',
            'patientdob'=>'required',
            'gender'=>'required',
            // 'mensturalstart'=>'required',
            // 'mensturalend'=>'required'

        ]);

        

        $c=new patient();

        // $l=new login();

        $c->tokenno=$tokenno;
        $c->uhid=$uhid;
        $c->patient_name=$patientname;
        $c->patient_dob=$patientdob;
        $c->patient_gender=$gender;
      

        $c->save();

        
        
        if($c)
             {
                echo "<script>alert('Success.. Details Added.....');window.location='/plist';</script>"; 
             }
             else{
                echo "<script>alert('Went Wrong! Add Again.......');window.location='/pat';</script>"; 
             }

    }


    public function store1(Request $request)
    {
        $pid=request('pid');
        // $lastmensturalperiod=request('mensturalstartdate');
        $technicianname=request('technicianname');
        $investigation=request('investigation');
        $modality=request('modality');
        //$startdate=request('xraystartdate');
        //dd($startdate);
        //$starttime=request('xraystarttime');
        // $enddate=request('enddate');
        // $endtime=request('endtime');
        // $billdate=request('billdate');
        // $billtime=request('billtime');
        $weight=request('weight');
        $contrast=request('contrast');
        $creatine=request('creatine');
        $kV=request('kV');
        $mAs=request('mAs');
        $dose=request('dose');
        $radiologist=request('radiologist');
        $stenographer=request('stenographer');
        $exposurecount=request('exposurecount');
        $exposuretime=request('exposuretime');
        $otintime=request('otintime');
        $otouttime=request('otouttime');
        $error=request('error');
        $correctiveaction=request('correctiveaction');
        $correctedby=request('correctedby');
        $outputmedia=request('outputmedia');
        $visittype=request('visittype');
        $remarks=request('remarks');

        

        $this->validate($request,[
            'technicianname'=>'required',
            'investigation'=>'required',
            'outputmedia'=>'required',
            'visittype'=>'required',
            'remarks'=>'required'
            // 'mensturalstart'=>'required',
            // 'mensturalend'=>'required'

        ]);

        $c=new studydetails();
        

        // $l=new login();
        $c->pid=$pid;
        //$c->last_menstural_period=$lastmensturalperiod;
        $c->technician_name=$technicianname;
        $c->investigation=$investigation;
        $c->modality=$modality;
        //$c->start_date=$startdate. '  '.$starttime;
       // $c->start_time=$starttime;
        //$c->end_date=$enddate.'  '.$endtime;
        //$c->end_time=$endtime;
        //$c->bill_date=$billdate. '  '.$billtime;
        //$c->bill_time=$billtime;
        // $c->weight=$weight;
        // $c->contrast=$contrast;
        // $c->creatine=$creatine;
        // $c->kV=$kV;
        // $c->mAs=$mAs;
        // $c->dose=$dose;
        // $c->radiologist=$radiologist;
        // $c->stenographer=$stenographer;
        // $c->exposure_count=$exposurecount;
        // $c->exposure_time=$exposuretime;
        // $c->ot_in_time=$otintime;
        // $c->ot_out_time=$otouttime;
        // $c->error=$error;
        // $c->corrective_action=$correctiveaction;
        // $c->corrected_by=$correctedby;
        // $c->output_media=$outputmedia;
        $c->visit_type=$visittype;
        $c->remarks=$remarks;

        $c->save();

        

        if($modality='DX'){
            $lastmensturalperiod=request('xraymensturalstartdate');
            $startdate=request('xraystartdate');
            $starttime=request('xraystarttime');
            $enddate=request('xrayenddate');
            $endtime=request('xrayendtime');
            $billdate=request('xraybilldate');
            $billtime=request('xraybilltime');

            $x=new xray();
            $x->sid=$c->id;
            $x->last_menstural_period=$lastmensturalperiod;
            $x->output_media=$outputmedia;
            $x->start_date=$startdate. '  '.$starttime;
            $x->end_date=$enddate.'  '.$endtime;
            $x->bill_date=$billdate. '  '.$billtime;
            $x->save();
        }

        
        
        
        if($c)
             {
                echo "<script>alert('Success.. Details Added.....');window.location='/plist';</script>"; 
             }
             else{
                echo "<script>alert('Went Wrong! Add Again.......');window.location='/stu';</script>"; 
             }

    }

    public function viewpatient(Request $request)
    {
        $search_text = $request->get('patient');
      //  dd($search_text);
        $data = ($search_text != null ) ? patient::where('patientname','LIKE','%'.$search_text.'%')->paginate(10) : patient::paginate(10);
       // $patient= patient::where('patientname','LIKE','%'.$search_text.'%')->get();
       // $data=patient::paginate(10);
        //$patientdob= Carbon::parse('patientdob');
        //$age = Carbon::parse($patientdob)->diff(Carbon::now())->y;
        //$age = $patientdob->age;

        return view('patientlist',compact('data','search_text'));
    }
    public function patient1($id)
    {
        $data = patient::find($id);
        $datas= studydetails::where('pid','=',$id)->get() ;

        return view ('singlepatient',compact('data','datas'));
    }
    public function addstudy($id)
    {
        $gen=patient::where('id',$id)->pluck('patient_gender');
       // dd($gen[0]);
        return view ('study',compact('id','gen'));
    }
    public function viewstudy($id)
    {
        $data=studydetails::find($id);
        return view('singlestudy',compact('data'));
    }

    public function addtest($id)
    {
        return view ('addtest',compact('id'));
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

    public function search(Request $request)
    {
        $search_text = $request->get('patient');
        $patient= patient::where('patientname','LIKE','%'.$search_text.'%')->get();

        return view('patientsearch', compact('patient'));
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
