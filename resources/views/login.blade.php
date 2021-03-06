@extends('theme')

@section('content')

<div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Login</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--================login_part Area =================-->
    <section class="login_part ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <form class="row contact_form" action="\login1" method="post" novalidate="novalidate">
                            {{csrf_field()}}
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="employeeid" name="employeeid" value=""
                                        placeholder="Employee Id" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="employeepass" name="employeepass" value=""
                                        placeholder="Password" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

    @endsection