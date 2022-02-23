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
    <script>
            function text(x) {
                if (x == 0) document.getElementById("id1").style.display="block";
                else {
                document.getElementById("id1").style.display="none";
                document.getElementById("mensturalstart").defaultValue = "00-00-0000";
                document.getElementById("mensturalend").defaultValue = "00-00-0000";
                }

                return;
            }
        </script>


    </head>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area">
            <div class="text-center">
                <h2>Patient Details</h2>
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
                                <form class="row contact_form" action="/pat1" method="post" novalidate="novalidate">
                                {{csrf_field()}}
                                <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="tokenno" name="tokenno" value=""
                                            placeholder="Token No">

                                        <span style="color:red" >@error('tokeno') {{$message}} @enderror</span>

                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control " id="uhid" name="uhid" value=""
                                            placeholder="Uhid">

                                        <span style="color:red" >@error('uhid') {{$message}} @enderror</span>
                                    
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="patientname" name="patientname" value=""
                                            placeholder="Patient Name">

                                        <span style="color:red" >@error('patientname') {{$message}} @enderror</span>
                                    
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <label>Date Of Birth</label>
                                        <input type="date" class="form-control" id="patientdob" name="patientdob" value=""
                                            placeholder=" ">
                                            <span style="color:red" >@error('patientdob') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 align-items-center form-group p_star" margin="5px 0 0 5px" float="left" id="gender">
                                        
                                        <input type="radio" float="left" padding="2px" id="gender"  value="0" name="gender">
                                        <label>Male</label>
                                        
                                        
                                        <input type="radio" float="left" padding="2px" id="gender" name="gender" value="1" >
                                        <label>Female</label>
                                        
                                        
                                        <input type="radio" float="left" padding="2px" id="gender" name="gender" value="2" >
                                        <label>Others</label>
                                        
                                            <span style="color:red" >@error('gender') {{$message}} @enderror</span>
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