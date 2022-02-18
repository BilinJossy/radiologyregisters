@extends('theme')


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
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Register</h2>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <form class="row contact_form" action="/register1" method="post" novalidate="novalidate">
                                {{csrf_field()}}
                                <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="employeeid" name="employeeid" value=""
                                            placeholder="Emp Id">

                                        <span style="color:red" >@error('employeeid') {{$message}} @enderror</span>

                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="employeename" name="employeename" value=""
                                            placeholder="Name">

                                        <span style="color:red" >@error('employeename') {{$message}} @enderror</span>
                                    
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="employeemail" name="employeemail" value=""
                                            placeholder="Mail Id">

                                        <span style="color:red" >@error('employeemail') {{$message}} @enderror</span>
                                    
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="employeepassword" name="employeepassword" value=""
                                            placeholder="Password">

                                        <span style="color:red" >@error('employeepassword') {{$message}} @enderror</span>
                                        
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="employeeconfirmpassword" name="employeeconfirmpassword" value=""
                                            placeholder="ConfirmPassword">

                                        <span style="color:red" >@error('employeeconfirmpassword') {{$message}} @enderror</span>

                                    </div>
                                    <div class="col-md-12 form-group">
                                        <button type="submit" value="register" class="btn_3">
                                            Register
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