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
                <h2>Patient List</h2>
            </div>
        </div>
        
        <!-- Hero Area End-->
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-2">
             
            </div>
            <div class="col-lg-6 col-md-6 "> 
            <form type="get" action="\plist" class="form-inline my-2 my-lg-0">
                <input type="search" value="{{ $search_text }}" class="form-control mr-sm-2" name="patient" placeholder="Search Patient">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
            <div class=" text-center col-lg-2 col-md-2">
            <a href="\pat" class="btn btn-primary">Add Patient</a>
            </div> 
            <div class=" text-center col-lg-2 col-md-2">
            
            </div>    
        </div>
        </div>
        <!--================login_part Area =================-->
        <section class="login_part ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-2">
                    </div>
                    <div class="col-lg-8 col-md-8 my-3">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>UHID</th>
                                        <th>Patient Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th> </th>
                                    </tr>
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{$d->uhid}}</td>
                                        <td>{{$d->patient_name}}</td>
                                        <td>{{\Carbon\Carbon::parse($d->patient_dob)->diff(\Carbon\Carbon::now())->format('%y');}}</td>
                                        <td>{{$d->patient_gender}}</td>
                                        <td><a href="plist/{{$d->id}}"class="btn_5">View Patient</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                                {{$data->links()}}

                    </div>
                    <div class="col-lg-2 col-md-2">
                    </div>
            </div>
        </section>
        <!--================Register_part end =================-->
    </main>
   
    
 @endsection