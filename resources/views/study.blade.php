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
                                            <input type="date" class="form-control " id="xraymensturalstartdate" name="xraymensturalstartdate" value="" >
                                        </div>
                                        @endif
                                        <div class="col-md-12 form-group p_star">
                                        <label for=" ">Output Media</label>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="radio" id="xrayoutputmedia" name="xrayoutputmedia" value="CD">
                                            <label for="outputmedia">CD</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                            <input type="radio" id="xrayoutputmedia" name="xrayoutputmedia" value="film">
                                            <label for="outputmedia">Film</label>
                                                <span style="color:red" >@error('outputmedia') {{$message}} @enderror</span>
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                        <label for=" ">Start Date & Time</label>
                                            <input type="date" class="form-control" id="xraystartdate" name="xraystartdate">
                                            <input type="time" class="form-control" id="xraystarttime" name="xraystarttime">
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                        <label for=" ">End Date & Time</label>
                                            <input type="date" class="form-control " id="xrayenddate" name="xrayenddate" >
                                            <input type="time" class="form-control " id="xrayendtime" name="xrayendtime" >
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                        <label for=" ">Bill Date & Time</label>
                                            <input type="date" class="form-control " id="xraybilldate" name="xraybilldate" >
                                            <input type="time" class="form-control " id="xraybilltime" name="xraybilltime" >
                                        </div>
                                    </div>
                                    <div class="CT box col-md-12 form-group p_star">
                                        @if($gen[0] == "female")
                                        <div class="col-md-12 form-group p_star">
                                        <label for=" ">Last Menstural Period</label>
                                            <input type="date" class="form-control " id="ctmensturalstartdate" name="ctmensturalstartdate" value="" >
                                        </div>
                                        @endif
                                        <div class="col-md-12 form-group p_star">
                                            <input type="text" class="form-control" id="ctweight" name="ctweight" value=""
                                                placeholder="Weight">
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                            <input type="text" class="form-control" id="ctcontrast" name="ctcontrast" value=""
                                                placeholder="Contrast">
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                            <input type="text" class="form-control" id="ctcreatine" name="ctcreatine" value=""
                                                placeholder="Creatine">
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                            <input type="text" class="form-control" id="ctkV" name="ctkV" value=""
                                                placeholder="kV">
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                            <input type="text" class="form-control" id="ctmAs" name="ctmAs" value=""
                                                placeholder="mAs">
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                            <input type="text" class="form-control" id="ctdose" name="ctdose" value=""
                                                placeholder="Dose">
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                        <label for=" ">Start Date & Time</label>
                                            <input type="date" class="form-control " id="ctstartdate" name="ctstartdate" value="">
                                            <input type="time" class="form-control " id="ctstarttime" name="ctstarttime" value="">                                   
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                        <label for=" ">End Date & Time</label>
                                            <input type="date" class="form-control " id="ctenddate" name="ctenddate" value="">
                                            <input type="time" class="form-control " id="ctendtime" name="ctendtime" value="">                                   
                                        </div>
                                        <div class="col-md-12 form-group p_star">
                                        <label for=" ">Bill Date & Time</label>
                                            <input type="date" class="form-control " id="ctbilldate" name="ctbilldate" value="">
                                            <input type="time" class="form-control " id="ctbilltime" name="ctbilltime" value="">
                                        </div>
                                    </div>
                                    <div class="MR box col-md-12 form-group p_star">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="mrweight" name="mrweight" value=""
                                            placeholder="Weight">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="mrcontrast" name="mrcontrast" value=""
                                            placeholder="Contrast">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="mrcreatine" name="mrcreatine" value=""
                                            placeholder="Creatine">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Start Date & Time</label>
                                        <input type="date" class="form-control " id="mrstartdate" name="mrstartdate" value="">
                                        <input type="time" class="form-control " id="mrstarttime" name="mrstarttime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">End Date & Time</label>
                                        <input type="date" class="form-control " id="mrenddate " name="mrenddate" value="">
                                        <input type="time" class="form-control " id="mrendtime" name="mrendtime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Bill Date & Time</label>
                                        <input type="date" class="form-control " id="mrbilldate" name="mrbilldate" value="">
                                        <input type="time" class="form-control " id="mrbilltime" name="mrbilltime" value="">
                                    </div>
                                    </div>
                                    <div class="MG box col-md-12 form-group p_star">
                                    @if($gen[0] == "female")
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Last Menstural Period</label>
                                        <input type="date" class="form-control " id="mgmensturalstartdate" name="mgmensturalstartdate" value="" >
                                    </div>
                                    @endif
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Output Media</label>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <input type="radio" id="mgoutputmedia" name="mgoutputmedia" value="CD">
                                        <label for="outputmedia">CD</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="radio" id="mgoutputmedia" name="mgoutputmedia" value="film">
                                        <label for="outputmedia">Film</label>
                                            <span style="color:red" >@error('outputmedia') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Start Date & Time</label>
                                        <input type="date" class="form-control " id="mgstartdate" name="mgstartdate" value="">
                                        <input type="time" class="form-control " id="mgstarttime" name="mgstarttime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">End Date & Time</label>
                                        <input type="date" class="form-control " id="mgenddate" name="mgenddate" value="">
                                        <input type="time" class="form-control " id="mgendtime" name="mgendtime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Bill Date & Time</label>
                                        <input type="date" class="form-control " id="mgbilldate" name="mgbilldate" value="">
                                        <input type="time" class="form-control " id="mgbilltime" name="mgbilltime" value="">
                                    </div>
                                    </div>
                                    <div class="RF box col-md-12 form-group p_star">
                                    @if($gen[0] == "female")
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Last Menstural Period</label>
                                        <input type="date" class="form-control " id="rfmensturalstartdate" name="rfmensturalstartdate" value="" >
                                    </div>
                                    @endif
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Output Media</label>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <input type="radio" id="rfoutputmedia" name="rfoutputmedia" value="CD">
                                        <label for="outputmedia">CD</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="radio" id="rfoutputmedia" name="rfoutputmedia" value="film">
                                        <label for="outputmedia">Film</label>
                                            <span style="color:red" >@error('outputmedia') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Start Date & Time</label>
                                        <input type="date" class="form-control " id="rfstartdate" name="rfstartdate" value="">
                                        <input type="time" class="form-control " id="rfstarttime" name="rfstarttime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">End Date & Time</label>
                                        <input type="date" class="form-control " id="rfenddate" name="rfenddate" value="">
                                        <input type="time" class="form-control " id="rfendtime" name="rfendtime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Bill Date & Time</label>
                                        <input type="date" class="form-control " id="rfbilldate" name="rfbilldate" value="">
                                        <input type="time" class="form-control " id="rfbilltime" name="rfbilltime" value="">
                                    </div>
                                    </div>
                                    <div class="BMD box col-md-12 form-group p_star">
                                    @if($gen[0] == "female")
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Last Menstural Period</label>
                                        <input type="date" class="form-control " id="bmdmensturalstartdate" name="bmdmensturalstartdate" value="" >
                                    </div>
                                    @endif
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Output Media</label>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <input type="radio" id="bmdoutputmedia" name="bmdoutputmedia" value="CD">
                                        <label for="outputmedia">CD</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="radio" id="bmdoutputmedia" name="bmdoutputmedia" value="film">
                                        <label for="outputmedia">Film</label>
                                            <span style="color:red" >@error('outputmedia') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Start Date & Time</label>
                                        <input type="date" class="form-control " id="bmdstartdate" name="bmdstartdate" value="">
                                        <input type="time" class="form-control " id="bmdstarttime" name="bmdstarttime" value="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">End Date & Time</label>
                                        <input type="date" class="form-control " id="bmdenddate" name="bmdenddate" value="">
                                        <input type="time" class="form-control " id="bmdendtime" name="bmdendtime" value="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Bill Date & Time</label>
                                        <input type="date" class="form-control " id="bmdbilldate" name="bmdbilldate" value="">
                                        <input type="time" class="form-control " id="bmdbilltime" name="bmdbilltime" value="">
                                    </div>
                                    </div>
                                    <div class="US box col-md-12 form-group p_star">
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Output Media</label>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <input type="radio" id="usoutputmedia" name="usoutputmedia" value="CD">
                                        <label for="outputmedia">CD</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="radio" id="usoutputmedia" name="usoutputmedia" value="film">
                                        <label for="outputmedia">Film</label>
                                            <span style="color:red" >@error('outputmedia') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="usstenographer" name="usstenographer" value=""
                                            placeholder="Stenographer">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Start Date & Time</label>
                                        <input type="date" class="form-control " id="usstartdate" name="usstartdate" value="">
                                        <input type="time" class="form-control " id="usstarttime" name="usstarttime" value="">                                    
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">End Date & Time</label>
                                        <input type="date" class="form-control " id="usenddate" name="usenddate" value="">
                                        <input type="time" class="form-control " id="usendtime" name="usendtime" value="">                                   
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Bill Date & Time</label>
                                        <input type="date" class="form-control " id="usbilldate" name="usbilldate" value="">
                                        <input type="time" class="form-control " id="usbilltime" name="usbilltime" value="">
                                    </div>
                                    </div>
                                    <div class="CARM box col-md-12 form-group p_star">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="carmexposurecount" name="carmexposurecount" value=""
                                            placeholder="Exposure Count">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Exposure Time</label>
                                        <input type="time" class="form-control" id="carmexposuretime" name="carmexposuretime" value=""
                                            placeholder="Exposure Time">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Procedure Start Time</label>
                                        <input type="time" class="form-control " id="carmstarttime" name="carmstarttime" value="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Procedure End Time</label>
                                        <input type="time" class="form-control " id="carmendtime" name="carmendtime" value="">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">OT In-Time</label>
                                        <input type="time" class="form-control" id="carmotintime" name="carmotintime" value=""
                                            placeholder="OT In-time">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">OT Out-Time</label>
                                        <input type="time" class="form-control" id="carmotouttime" name="carmotouttime" value=""
                                            placeholder="OT Out-time">
                                    </div>
                                    </div>
                                    <div class="PR box col-md-12 form-group p_star">
                                    @if($gen[0] == "female")
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">Last Menstural Period</label>
                                        <input type="date" class="form-control " id="prmensturalstartdate" name="prmensturalstartdate" value="" >
                                    </div>
                                    @endif
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">OT In-Time</label>
                                        <input type="time" class="form-control" id="protintime" name="protintime" value=""
                                            placeholder="OT In-time">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <label for=" ">OT Out-Time</label>
                                        <input type="time" class="form-control" id="protouttime" name="protouttime" value=""
                                            placeholder="OT Out-time">
                                    </div>
                                    </div>
                                    <div class="RE box col-md-12 form-group p_star">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="reerror" name="reerror" value=""
                                            placeholder="Error">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="recorrectiveaction" name="recorrectiveaction" value=""
                                            placeholder="Corrective Action">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="recorrectedby" name="recorrectedby" value=""
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