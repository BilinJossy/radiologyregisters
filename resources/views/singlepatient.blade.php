@extends('theme2')


@section('content')
<body>
    <header>
        
    <!-- Mobile Menu -->
    <div class="col-12">
            <div class="mobile_menu d-block d-lg-none"></div>
    </div>
        <!-- Header End -->
    </header>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class=" text-center">
                <h2>Patient Details</h2>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        <section class="login_part ">
            <div class="container ">
                <div class="row align-items-center ">
                    <div class="col-lg-2 col-md-2 ">
                    </div>
                    <div class="col-lg-8 col-md-8 ">
                                <table class="table table-bordered">
                                    <tr>
                                        <th><label >Token No</label></th>
                                        <th><label >UHID</label></th>
                                        <th><label >Patient Name</label></th>
                                        <th><label >Age</label></th>
                                        <th><label >Gender</label></th>
                                    </tr>
                                    
                                    <tr>
                                        <td>{{ $data->tokenno }}</td>
                                        <td>{{ $data->uhid }}</td>
                                        <td>{{ $data->patient_name }}</td>
                                        <td>{{\Carbon\Carbon::parse($data->patient_dob)->diff(\Carbon\Carbon::now())->format('%y');}}</td>
                                        <td>@if($data->patient_gender == 0)
                                                Male
                                            @elseif($data->patient_gender == 1)
                                                Female
                                            @elseif($data->patient_gender == 2)
                                                Others
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                    </div>
                    <div class="col-lg-2 col-md-2">
                    </div>
            </div>
        </section>

        <div class="slider-area">
            <div class=" text-center col-lg-12 col-md-12">
                <h2>Study List</h2>
            </div>
        </div>

        <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-4">
            
            </div>
            <div class="col-lg-4 col-md-4"> 
            
            </div>
            <div class=" text-center col-lg-2 col-md-2">
            <a href="\stu\{{ $data->id }}" class="btn btn-primary">Add Study</a>
            </div> 
            <div class=" text-center col-lg-2 col-md-2">
            
            </div>   
        </div>
        </div>
        
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        <section class="login_part ">
            <div class="container my-3">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-2">
                    </div>
                    <div class="col-lg-8 col-md-8">
                                <table class="table table-bordered">
                                    <tr>
                                        <th><label >Technician Name</label></th>
                                        <th><label >Investigation</label></th>
                                        <th><label >Visit Type</label></th>
                                        <th><label >Modality</label></th>
                                        <th><label >Remarks</label></th>
                                        <th><label > </label></th>
                                    </tr>
                                    @foreach($datas as $d)
                                    <tr>
                                        <td>{{$d->technician_name}}</td>
                                        <td>{{$d->investigation}}</td>
                                        <td>{{$d->visit_type}}</td>
                                        <td>{{$d->modality}}</td>
                                        <td>{{$d->remarks}}</td>
                                        <td><a href="slist/{{$d->id}} "class="btn_5">View Study</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                                {{$datas->links()}}
                    </div>
                    <div class="col-lg-2 col-md-2">
                    </div>
            </div>
        </section>

        <!--================Register_part end =================-->
    </main>
   
    
 @endsection