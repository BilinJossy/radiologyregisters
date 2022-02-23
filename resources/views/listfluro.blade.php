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
                <h2>Fluro List</h2> 
            </div>
        </div>
        
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        <section class="login_part ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                    <table class="table table-bordered">
                                    <tr>
                                        <th><label >Patient Name</label></th>
                                        <th><label >Start Date</label></th>
                                        <th><label >Visit Type</label></th>
                                        <th><label >FLURO Output Media</labcel></th>
                                        <th><label >XRAY Time</label></th>
                                    </tr>
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{$d->studydetails->patient->patient_name}}</td>
                                        <td>{{$d->fluros_start_date}}</td>
                                        <td>{{$d->studydetails->visit_type}}</td>
                                        <td>{{$d->fluros_output_media}}</td>
                                        <td>{{$d->created_at}}</td>
                                        <td><a href="plist/slist/{{$d->studydetails->id}}"class="btn_5">View Study</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                                {{$data->links()}}
                    </div>
            </div>
        </section>
        <!--================Register_part end =================-->
    </main>
   
    
 @endsection