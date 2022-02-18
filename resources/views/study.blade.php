@extends('theme2')


@section('content')
<body>
    <header>
        
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function(){
        $("select").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(optionValue){
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else{
                    $(".box").hide();
                }
            });
        }).change();
    });
    </script>


    </head>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
                            <div class=" text-center">
                                <h2>Study Details</h2>
                            </div>
        </div>
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        <section class="login_part ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <form class="row contact_form" action="/stu1" method="post" novalidate="novalidate">
                                {{csrf_field()}}
                                        <input type="text" class="form-control" name="pid" value="{{ $id }}"
                                            placeholder="Technician Name" hidden="true">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="technicianname" name="technicianname" value=""
                                            placeholder="Technician Name">

                                        <span style="color:red" >@error('technicianname') {{$message}} @enderror</span>

                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="investigation" name="investigation" value=""
                                            placeholder="Investigation">

                                        <span style="color:red" >@error('investigation') {{$message}} @enderror</span>

                                    </div>
                                    <div class="col-md-12 form-group p_star md-3">
                                    <select class="form-select" aria-label="Disabled select example" name="modality" id="modality">
                                    <option selected>Modality</option>
                                    <option value="DX">DX-Xray</option>
                                    <option value="CT">CT-Ct Scan</option>
                                    <option value="MR">MR-MRI Scan</option>
                                    <option value="MG">MG-Mammogram</option>
                                    <option value="RF">RF-Fluro</option>
                                    <option value="BMD">BMD</option>
                                    <option value="US">US-Ultrasound</option>
                                    <option value="CARM">C-ARM</option>
                                    <option value="PR">Portable</option>
                                    <option value="RE">Redos</option>
                                    </select>
                                    </div>
                                    <div class="DX box col-md-12 form-group p_star">
                                    @if($gen[0] == "female")
                                        <div class="col-md-12 form-group p_star">
                                        <label for=" ">Last Menstural Period</label>
                                            <input type="date" class="form-control " id="mensturalstartdate" name="xraymensturalstartdate" value="" >
                                        </div>
                                        @endif
                                        <div class="col-md-12 form-group p_star">
                                        <label for=" ">Output Media</label>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="radio" id="outputmedia" name="outputmedia" value="CD">
                                            <label for="outputmedia">CD</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                            <input type="radio" id="outputmedia" name="outputmedia" value="film">
                                            <label for="outputmedia">Film</label>
                                                <span style="color:red" >@error('outputmedia') {{$message}} @enderror</span>
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                        <label for=" ">Start Date & Time</label>
                                            <input type="date" class="form-control" id="startdate1" name="xraystartdate">
                                            <input type="time" class="form-control" id="starttime1" name="xraystarttime">
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                        <label for=" ">End Date & Time</label>
                                            <input type="date" class="form-control " id="enddate1" name="xrayenddate" >
                                            <input type="time" class="form-control " id="endtime1" name="xrayendtime" >
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                        <label for=" ">Bill Date & Time</label>
                                            <input type="date" class="form-control " id="billdate1" name="xraybilldate" >
                                            <input type="time" class="form-control " id="billtime1" name="xraybilltime" >
                                        </div>
                                    </div>
                                    <div class="CT box col-md-12 form-group p_star">
                                    @if($gen[0] == "female")
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Last Menstural Period</label>
                                        <input type="date" class="form-control " id="mensturalstartdate" name="mensturalstartdate" value="" >
                                    </div>
                                    @endif
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="weight" name="weight" value=""
                                            placeholder="Weight">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="contrast" name="contrast" value=""
                                            placeholder="Contrast">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="creatine" name="creatine" value=""
                                            placeholder="Creatine">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="kV" name="kV" value=""
                                            placeholder="kV">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="mAs" name="mAs" value=""
                                            placeholder="mAs">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="dose" name="dose" value=""
                                            placeholder="Dose">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Start Date & Time</label>
                                        <input type="date" class="form-control " id="startdate2" name="startdate" value="">
                                        <input type="time" class="form-control " id="starttime2" name="starttime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">End Date & Time</label>
                                        <input type="date" class="form-control " id="enddate2" name="enddate" value="">
                                        <input type="time" class="form-control " id="endtime2" name="endtime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Bill Date & Time</label>
                                        <input type="date" class="form-control " id="billdate2" name="billdate" value="">
                                        <input type="time" class="form-control " id="billtime2" name="billtime" value="">
                                    </div>
                                    </div>
                                    <div class="MR box col-md-12 form-group p_star">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="weight" name="weight" value=""
                                            placeholder="Weight">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="contrast" name="contrast" value=""
                                            placeholder="Contrast">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="creatine" name="creatine" value=""
                                            placeholder="Creatine">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Start Date & Time</label>
                                        <input type="date" class="form-control " id="startdate3" name="startdate" value="">
                                        <input type="time" class="form-control " id="starttime3" name="starttime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">End Date & Time</label>
                                        <input type="date" class="form-control " id="enddate3" name="enddate" value="">
                                        <input type="time" class="form-control " id="endtime3" name="endtime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Bill Date & Time</label>
                                        <input type="date" class="form-control " id="billdate3" name="billdate" value="">
                                        <input type="time" class="form-control " id="billtime3" name="billtime" value="">
                                    </div>
                                    </div>
                                    <div class="MG box col-md-12 form-group p_star">
                                    @if($gen[0] == "female")
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Last Menstural Period</label>
                                        <input type="date" class="form-control " id="mensturalstartdate" name="mensturalstartdate" value="" >
                                    </div>
                                    @endif
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Output Media</label>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <input type="radio" id="outputmedia" name="outputmedia" value="CD">
                                        <label for="outputmedia">CD</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="radio" id="outputmedia" name="outputmedia" value="film">
                                        <label for="outputmedia">Film</label>
                                            <span style="color:red" >@error('outputmedia') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Start Date & Time</label>
                                        <input type="date" class="form-control " id="startdate4" name="startdate" value="">
                                        <input type="time" class="form-control " id="starttime4" name="starttime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">End Date & Time</label>
                                        <input type="date" class="form-control " id="enddate4" name="enddate" value="">
                                        <input type="time" class="form-control " id="endtime4" name="endtime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Bill Date & Time</label>
                                        <input type="date" class="form-control " id="billdate4" name="billdate" value="">
                                        <input type="time" class="form-control " id="billtime4" name="billtime" value="">
                                    </div>
                                    </div>
                                    <div class="RF box col-md-12 form-group p_star">
                                    @if($gen[0] == "female")
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Last Menstural Period</label>
                                        <input type="date" class="form-control " id="mensturalstartdate" name="mensturalstartdate" value="" >
                                    </div>
                                    @endif
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Output Media</label>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <input type="radio" id="outputmedia" name="outputmedia" value="CD">
                                        <label for="outputmedia">CD</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="radio" id="outputmedia" name="outputmedia" value="film">
                                        <label for="outputmedia">Film</label>
                                            <span style="color:red" >@error('outputmedia') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Start Date & Time</label>
                                        <input type="date" class="form-control " id="startdate5" name="startdate" value="">
                                        <input type="time" class="form-control " id="starttime5" name="starttime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">End Date & Time</label>
                                        <input type="date" class="form-control " id="enddate5" name="enddate" value="">
                                        <input type="time" class="form-control " id="endtime5" name="endtime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Bill Date & Time</label>
                                        <input type="date" class="form-control " id="billdate5" name="billdate" value="">
                                        <input type="time" class="form-control " id="billtime5" name="billtime" value="">
                                    </div>
                                    </div>
                                    <div class="BMD box col-md-12 form-group p_star">
                                    @if($gen[0] == "female")
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Last Menstural Period</label>
                                        <input type="date" class="form-control " id="mensturalstartdate" name="mensturalstartdate" value="" >
                                    </div>
                                    @endif
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Output Media</label>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <input type="radio" id="outputmedia" name="outputmedia" value="CD">
                                        <label for="outputmedia">CD</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="radio" id="outputmedia" name="outputmedia" value="film">
                                        <label for="outputmedia">Film</label>
                                            <span style="color:red" >@error('outputmedia') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Start Date & Time</label>
                                        <input type="date" class="form-control " id="startdate6" name="startdate" value="">
                                        <input type="time" class="form-control " id="starttime6" name="starttime" value="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">End Date & Time</label>
                                        <input type="date" class="form-control " id="enddate6" name="enddate" value="">
                                        <input type="time" class="form-control " id="endtime6" name="endtime" value="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Bill Date & Time</label>
                                        <input type="date" class="form-control " id="billdate6" name="billdate" value="">
                                        <input type="time" class="form-control " id="billtime6" name="billtime" value="">
                                    </div>
                                    </div>
                                    <div class="US box col-md-12 form-group p_star">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="radiologist" name="radiologist" value=""
                                            placeholder="Radiologist">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="stenographer" name="stenographer" value=""
                                            placeholder="Stenographer">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Start Date & Time</label>
                                        <input type="date" class="form-control " id="startdate7" name="startdate" value="">
                                        <input type="time" class="form-control " id="starttime7" name="starttime" value="">                                    
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">End Date & Time</label>
                                        <input type="date" class="form-control " id="enddate7" name="enddate" value="">
                                        <input type="time" class="form-control " id="endtime7" name="endtime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Bill Date & Time</label>
                                        <input type="date" class="form-control " id="billdate7" name="billdate" value="">
                                        <input type="time" class="form-control " id="billtime7" name="billtime" value="">
                                    </div>
                                    </div>
                                    <div class="CARM box col-md-12 form-group p_star">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="exposurecount" name="exposurecount" value=""
                                            placeholder="Exposure Count">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Exposure Time</label>
                                        <input type="time" class="form-control" id="exposuretime" name="exposuretime" value=""
                                            placeholder="Exposure Time">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Procedure Start Time</label>
                                        <input type="time" class="form-control " id="starttime8" name="starttime" value="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Procedure End Time</label>
                                        <input type="time" class="form-control " id="endtime18" name="endtime" value="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">OT In-Time</label>
                                        <input type="time" class="form-control" id="otintime1" name="otintime" value=""
                                            placeholder="OT In-time">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">OT Out-Time</label>
                                        <input type="time" class="form-control" id="otouttime1" name="otouttime" value=""
                                            placeholder="OT Out-time">
                                    </div>
                                    </div>
                                    <div class="PR box col-md-12 form-group p_star">
                                    @if($gen[0] == "female")
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Last Menstural Period</label>
                                        <input type="date" class="form-control " id="mensturalstartdate" name="mensturalstartdate" value="" >
                                    </div>
                                    @endif
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">OT In-Time</label>
                                        <input type="time" class="form-control" id="otintime2" name="otintime" value=""
                                            placeholder="OT In-time">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">OT Out-Time</label>
                                        <input type="time" class="form-control" id="otouttime2" name="otouttime" value=""
                                            placeholder="OT Out-time">
                                    </div>
                                    </div>
                                    <div class="RE box col-md-12 form-group p_star">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="error" name="error" value=""
                                            placeholder="Error">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="correctiveaction" name="coreectiveaction" value=""
                                            placeholder="Corrective Action">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="correctedby" name="coreectedby" value=""
                                            placeholder="Corrected By">
                                    </div>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Visit Type</label>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="visittype" name="visittype" value="IP">
                                        <label for="visittype">IP</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="radio" id="visittype" name="visittype" value="OP">
                                        <label for="visittype">OP</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="radio" id="visittype" name="visittype" value="ER">
                                        <label for="visittype">ER</label>

                                        <span style="color:red" >@error('visittype') {{$message}} @enderror</span>
                                        
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="remarks" name="remarks" value=""
                                            placeholder="Remarks">

                                        <span style="color:red" >@error('remarks') {{$message}} @enderror</span>

                                    </div>
                                    <div class="col-md-12 form-group">
                                       
                                        <button type="submit" value="register" class="btn_3">
                                            Submit
                                        </button>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                    </div>
                </div>
            </div>
        </section>
        <!--================Register_part end =================-->
    </main>
   
    
 @endsection