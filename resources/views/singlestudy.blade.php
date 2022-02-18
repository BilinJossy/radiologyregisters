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
                <h2>Study Details</h2>
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
                                        <th><label >Technician Name</label></th>
                                        <th><label >Investigation</label></th>
                                        <th><label >Start Date&Time</label></th>
                                        <th><label >End Date&Time</label></th>
                                        <th><label >Bill Date&Time</label></th>
                                        <th><label >Output Media</label></th>
                                        <th><label >Visit Type</label></th>
                                        <th><label >Remarks</label></th>
                                    </tr>
                                    
                                    <tr>
                                        <td>{{ $data->technician_name }}</td>
                                        <td>{{ $data->investigation }}</td>
                                        <td>{{ $data->start_date }}</td>
                                        <td>{{ $data->end_date }}</td>
                                        <td>{{ $data->bill_date }}</td>
                                        <td>{{ $data->output_media }}</td>
                                        <td>{{ $data->visit_type }}</td>
                                        <td>{{ $data->remarks }}</td>
                                    </tr>
                                </table>
                    </div>
                   
            </div>
        </section>

        <div class="slider-area">
            <div class=" text-center col-lg-12 col-md-12">
                <h2>Test List</h2>
            </div>
        </div>

        <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-4">
            
            </div>
            <div class="col-lg-4 col-md-4"> 
            
            </div>
            <div class=" text-center col-lg-4 col-md-4">
            <a href="\test\{{ $data->id }}" class="btn_3">Add Tests</a>
            </div>     
        </div>
        </div>

        
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        

        <!--================Register_part end =================-->
    </main>
   
    
 @endsection