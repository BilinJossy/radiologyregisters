@extends('theme')

@section('content')

<div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Test-CT</h2>
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
                            <form class="row contact_form" action="/addct1" method="post" novalidate="novalidate">
                            {{csrf_field()}}
                            <div class="col-md-12 form-group p_star">
                                 <input type="text" class="form-control" name="sid" value="{{ $id }}"
                                             hidden="true">
                                        <input type="text" class="form-control " name="weight" value="" placeholder="Weight">
                                        <span style="color:red" >@error('weight') {{$message}} @enderror</span>
                                        <input type="text" class="form-control " name="contrast" value="" placeholder="Contrast">
                                        <span style="color:red" >@error('contrast') {{$message}} @enderror</span>
                                        <input type="text" class="form-control " name="creatine" value="" placeholder="Creatine">
                                        <span style="color:red" >@error('creatine') {{$message}} @enderror</span>
                                        <input type="text" class="form-control " name="kV" value="" placeholder="KV">
                                        <span style="color:red" >@error('kV') {{$message}} @enderror</span>
                                        <input type="text" class="form-control " name="mAs" value="" placeholder="mAs">
                                        <span style="color:red" >@error('mAs') {{$message}} @enderror</span>
                                        <input type="text" class="form-control " name="dose" value="" placeholder="Dose">
                                        <span style="color:red" >@error('dose') {{$message}} @enderror</span>
                                    </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        Submit
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