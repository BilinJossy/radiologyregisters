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
        <div class="slider-area">
            <div class=" text-center col-lg-12 col-md-12">
                <h2>Redos List</h2> 
            </div>
        </div>
        
        <!-- Hero Area End-->
        
        <!--================login_part Area =================-->
        <section class="login_part ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-2">
                    </div>
                    <div class="col-lg-8 col-md-8">
                    <table class="table table-bordered">
                                    <tr>
                                        <th><label >Patient Name</label></th>
                                        <th><label >Start Date</label></th>
                                        <th><label >Visit Type</label></th>
                                        <th><label >Error</label></th>
                                        <th><label >Corrective Action</label></th>
                                        <th><label >Corrected By</label></th>
                                        <th><label >MG Time</label></th>
                                    </tr>
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{$d->studydetails->patient->patientname}}</td>
                                        <td>{{$d->studydetails->startdate}}</td>
                                        <td>{{$d->studydetails->visittype}}</td>
                                        <td>{{$d->error}}</td>
                                        <td>{{$d->correctiveaction}}</td>
                                        <td>{{$d->correctiveaction}}</td>
                                        <td>{{$d->created_at}}</td>
                                        <td><a href="plist/slist/{{$d->studydetails->id}}"class="btn_5">View Study</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                    </div>
                    <div class="col-lg-2 col-md-2">
                    </div>
            </div>
        </section>
        <!--================Register_part end =================-->
    </main>
   
    
 @endsection