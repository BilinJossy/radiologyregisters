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
                <h2>Staffs List</h2> 
            </div>
        </div>
        
        <!-- Hero Area End-->
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10">
            <form type="get" action="\staff" class="form-inline my-2 my-lg-0">
                <input type="search" value="{{ $search_text }}" class="form-control mr-sm-2" name="staff" placeholder="Search Staffs">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
            <div class=" text-center col-lg-2 col-md-2">
            <a href="\reg" class="btn btn-primary">Add Staff</a>
            </div>    
        </div>
        </div>

        <!--================login_part Area =================-->
        <section class="login_part ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 my-3">
                    <table class="table table-bordered">
                                    <tr>
                                        <th><label >Staff Name</label></th>
                                        <th><label >Employee ID</label></th>
                                        <th><label >User Type</label></th>
                                        <th><label >Employee Mail</labcel></th>
                                    </tr>
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{$d->employee_name}}</td>
                                        <td>{{$d->employee_id}}</td>
                                        <td>{{$d->user_type}}</td>
                                        <td>{{$d->employee_mail}}</td>
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