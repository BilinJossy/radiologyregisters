<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\register;
use App\Models\studydetails;
use App\Models\xray;
use App\Models\ct;
use App\Models\mri;
use App\Models\mg;
use App\Models\fluro;
use App\Models\bmd;
use App\Models\carm;
use App\Models\us;
use App\Models\portable;
use App\Models\redos;
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
        $technicianname=request('technicianname');
        $investigation=request('investigation');
        $modality=request('modality');
        $visittype=request('visittype');
        $remarks=request('remarks');

        

        $this->validate($request,[
            'technicianname'=>'required',
            'investigation'=>'required',
            'visittype'=>'required',
            'remarks'=>'required'

        ]);

        $c=new studydetails();
        

        
        $c->pid=$pid;
        $c->technician_name=$technicianname;
        $c->investigation=$investigation;
        $c->modality=$modality;
        $c->visit_type=$visittype;
        $c->remarks=$remarks;

        $c->save();

        if($modality=='CT'){
            $ctlastmensturalperiod=request('ctmensturalstartdate');
            $ctweight=request('ctweight');
            $ctcontrast=request('ctcontrast');
            $ctcreatine=request('ctcreatine');
            $ctkV=request('ctkV');
            $ctmAs=request('ctmAs');
            $ctdose=request('ctdose');
            $ctstartdate=request('ctstartdate');
            $ctstarttime=request('ctstarttime');
            $ctenddate=request('ctenddate');
            $ctendtime=request('ctendtime');
            $ctbilldate=request('ctbilldate');
            $ctbilltime=request('ctbilltime');

            $ct=new ct();

            $ct->sid=$c->id;
            $ct->ct_last_menstural_period=$ctlastmensturalperiod;
            $ct->ct_weight=$ctweight;
            $ct->ct_contrast=$ctcontrast;
            $ct->ct_creatine=$ctcreatine;
            $ct->ct_kV=$ctkV;
            $ct->ct_mAs=$ctmAs;
            $ct->ct_dose=$ctdose;
            $ct->ct_start_date=$ctstartdate. '  '.$ctstarttime;
            $ct->ct_end_date=$ctenddate.'  '.$ctendtime;
            $ct->ct_bill_date=$ctbilldate. '  '.$ctbilltime;
            $ct->save();
        }else if($modality=='DX') {
            $xraylastmensturalperiod=request('xraymensturalstartdate');
            $xrayoutputmedia=request('xrayoutputmedia');
            $xraystartdate=request('xraystartdate');
            $xraystarttime=request('xraystarttime');
            $xrayenddate=request('xrayenddate');
            $xrayendtime=request('xrayendtime');
            $xraybilldate=request('xraybilldate');
            $xraybilltime=request('xraybilltime');

            $x=new xray();

            $x->sid=$c->id;
            $x->xray_last_menstural_period=$xraylastmensturalperiod;
            $x->xray_output_media=$xrayoutputmedia;
            $x->xray_start_date=$xraystartdate. '  '.$xraystarttime;
            $x->xray_end_date=$xrayenddate.'  '.$xrayendtime;
            $x->xray_bill_date=$xraybilldate. '  '.$xraybilltime;
            $x->save();
        }else if($modality=='MR'){
            $mrweight=request('mrweight');
            $mrcontrast=request('mrcontrast');
            $mrcreatine=request('mrcreatine');
            $mrstartdate=request('mrstartdate');
            $mrstarttime=request('mrstarttime');
            $mrenddate=request('mrenddate');
            $mrendtime=request('mrendtime');
            $mrbilldate=request('mrbilldate');
            $mrbilltime=request('mrbilltime');

            $ct=new mri();

            $ct->sid=$c->id;
            $ct->mri_weight=$mrweight;
            $ct->mri_contrast=$mrcontrast;
            $ct->mri_creatine=$mrcreatine;
            $ct->mri_start_date=$mrstartdate. '  '.$mrstarttime;
            $ct->mri_end_date=$mrenddate.'  '.$mrendtime;
            $ct->mri_bill_date=$mrbilldate. '  '.$mrbilltime;
            $ct->save();
        }else if($modality=='MG'){
            $mglastmensturalperiod=request('mgmensturalstartdate');
            $mgoutputmedia=request('mgoutputmedia');
            $mgstartdate=request('mgstartdate');
            $mgstarttime=request('mgstarttime');
            $mgenddate=request('mgenddate');
            $mgendtime=request('mgendtime');
            $mgbilldate=request('mgbilldate');
            $mgbilltime=request('mgbilltime');

            $ct=new mg();

            $ct->sid=$c->id;
            $ct->mg_last_menstural_period=$mglastmensturalperiod;
            $ct->mg_output_media=$mgoutputmedia;
            $ct->mg_start_date=$mgstartdate. '  '.$mgstarttime;
            $ct->mg_end_date=$mgenddate.'  '.$mgendtime;
            $ct->mg_bill_date=$mgbilldate. '  '.$mgbilltime;
            $ct->save();
        }else if($modality=='RF'){
            $rflastmensturalperiod=request('rfmensturalstartdate');
            $rfoutputmedia=request('rfoutputmedia');
            $rfstartdate=request('rfstartdate');
            $rfstarttime=request('rfstarttime');
            $rfenddate=request('rfenddate');
            $rfendtime=request('rfendtime');
            $rfbilldate=request('rfbilldate');
            $rfbilltime=request('rfbilltime');

            $ct=new fluro();

            $ct->sid=$c->id;
            $ct->fluros_last_menstural_period=$rflastmensturalperiod;
            $ct->fluros_output_media=$rfoutputmedia;
            $ct->fluros_start_date=$rfstartdate. '  '.$rfstarttime;
            $ct->fluros_end_date=$rfenddate.'  '.$rfendtime;
            $ct->fluros_bill_date=$rfbilldate. '  '.$rfbilltime;
            $ct->save();
        }else if($modality=='BMD'){
            $bmdlastmensturalperiod=request('bmdmensturalstartdate');
            $bmdoutputmedia=request('bmdoutputmedia');
            $bmdstartdate=request('bmdstartdate');
            $bmdstarttime=request('bmdstarttime');
            $bmdenddate=request('bmdenddate');
            $bmdendtime=request('bmdendtime');
            $bmdbilldate=request('bmdbilldate');
            $bmdbilltime=request('bmdbilltime');

            $ct=new bmd();

            $ct->sid=$c->id;
            $ct->bmd_last_menstural_period=$bmdlastmensturalperiod;
            $ct->bmd_output_media=$bmdoutputmedia;
            $ct->bmd_start_date=$bmdstartdate. '  '.$bmdstarttime;
            $ct->bmd_end_date=$bmdenddate.'  '.$bmdendtime;
            $ct->bmd_bill_date=$bmdbilldate. '  '.$bmdbilltime;
            $ct->save();
        }else if($modality=='US'){
            $usoutputmedia=request('usoutputmedia');
            $usstenographer=request('usstenographer');
            $usstartdate=request('usstartdate');
            $usstarttime=request('usstarttime');
            $usenddate=request('usenddate');
            $usendtime=request('usendtime');
            $usbilldate=request('usbilldate');
            $usbilltime=request('usbilltime');

            $ct=new us();

            $ct->sid=$c->id;
            $ct->us_stenographer=$usstenographer;
            $ct->us_output_media=$usoutputmedia;
            $ct->us_start_date=$usstartdate. '  '.$usstarttime;
            $ct->us_end_date=$usenddate.'  '.$usendtime;
            $ct->us_bill_date=$usbilldate. '  '.$usbilltime;
            $ct->save();
        }else if($modality=='CARM'){
            $carmexposurecount=request('carmexposurecount');
            $carmexposuretime=request('carmexposuretime');
            $carmstarttime=request('carmstarttime');
            $carmendtime=request('carmendtime');
            $carmotintime=request('carmotintime');
            $carmotouttime=request('carmotouttime');
            

            $ct=new carm();

            $ct->sid=$c->id;
            $ct->carms_exposure_count=$carmexposurecount;
            $ct->carms_exposure_time=$carmexposuretime;
            $ct->carms_procedure_start_time=$carmstarttime;
            $ct->carms_procedure_end_time=$carmendtime;
            $ct->carms_ot_in_time=$carmotintime;
            $ct->carms_ot_out_time=$carmotouttime;
            $ct->save();
        }else if($modality=='PR'){
            $prlastmensturalperiod=request('prmensturalstartdate');
            $protintime=request('protintime');
            $protouttime=request('protouttime');
            

            $ct=new portable();

            $ct->sid=$c->id;
            $ct->portable_last_menstural_period=$prlastmensturalperiod;
            $ct->portable_ot_in_time=$protintime;
            $ct->portable_ot_out_time=$protouttime;
            $ct->save();
        }else if($modality=='RE'){
            $reerror=request('reerror');
            $recorrectiveaction=request('recorrectiveaction');
            $recorrectedby=request('recorrectedby');
            

            $ct=new redos();

            $ct->sid=$c->id;
            $ct->redos_error=$reerror;
            $ct->redos_corrective_action=$recorrectiveaction;
            $ct->redos_corrected_by=$recorrectedby;
            $ct->save();
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
        $data = ($search_text != null ) ? patient::where('patient_name','LIKE','%'.$search_text.'%')->paginate(10) : patient::paginate(10);
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
        $datas= studydetails::where('pid','=',$id)->paginate(5) ;

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
