@extends('theme2')

@section('content')
    
    <!-- trending item start-->
    <section class="items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h2>Tests</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-sm-2">
                <a href="/addxray/{{$id}}">
                    <div class="single_product_item">
                        <div class="single_product_item_thumb">
                            <img src="{{asset('img/tranding_item/tranding_item_1.png')}}" alt="#" class="img-fluid">
                        </div>
                        <h3> XRAY </h3>
                    </div>
                    </a> 
                </div>
                <div class="col-lg-2 col-sm-2">
                <a href="/addbmd/{{$id}}">
                    <div class="single_product_item">
                        <img src="{{asset('img/tranding_item/tranding_item_2.png')}}" alt="#" class="img-fluid">
                        <h3> BMD </h3>
                    </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-2">
                <a href="/addcarm/{{$id}}">
                    <div class="single_product_item">
                        <img src="{{asset('img/tranding_item/tranding_item_3.png')}}" alt="#" class="img-fluid">
                        <h3> CARM</a> </h3>
                    </div>
                    </a> 
                </div>
                <div class="col-lg-2 col-sm-2">
                <a href="/addmg/{{$id}}">
                    <div class="single_product_item">
                        <img src="{{asset('img/tranding_item/tranding_item_4.png')}}" alt="#" class="img-fluid">
                        <h3> MG </h3>
                    </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-2">
                <a href="/addus/{{$id}}">
                    <div class="single_product_item">
                        <img src="{{asset('img/tranding_item/tranding_item_5.png')}}" alt="#" class="img-fluid">
                        <h3> Ultra Sound </h3>
                    </div>
                    </a>
                </div>
</div>
    <div class="row justify-content-center">            
    <div class="col-lg-2 col-sm-2">
                <a href="/addct/{{$id}}">
                    <div class="single_product_item">
                        <img src="{{asset('img/tranding_item/tranding_item_6.png')}}" alt="#" class="img-fluid">
                        <h3>CT Scan </h3>
                    </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-2">
                <a href="/addmri/{{$id}}">
                    <div class="single_product_item">
                        <img src="{{asset('img/tranding_item/tranding_item_7.png')}}" alt="#" class="img-fluid">
                        <h3> MRI </h3>
                    </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-2">
                <a href="/addfluro/{{$id}}">
                    <div class="single_product_item">
                        <img src="{{asset('img/tranding_item/tranding_item_8.png')}}" alt="#" class="img-fluid">
                        <h3> Fluro </h3>
                    </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-2">
                <a href="/addredos/{{$id}}">
                    <div class="single_product_item">
                        <img src="{{asset('img/tranding_item/tranding_item_9.png')}}" alt="#" class="img-fluid">
                        <h3> Redos </h3>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- trending item end-->
@endsection
    