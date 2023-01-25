@extends('layouts.templete')
@section('content')

 @foreach ($productos as $producto)
 <div class="container px-4 px-lg-5 mt-5">
    
 <div class="row mb-6">
    <div class="card h-100">
        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div
        <!-- Product image-->
        <img class="card-img-top" src="{{asset('storage').'/'.$producto->imagen}}" alt="..." />
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{$producto->nombrepro}}</h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning mb-2">
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                </div>
                <!-- Product price-->
                <h5 class="fw-bolder">Color:{{$producto->color}}</h5>
                <h5 class="fw-bolder">${{$producto->precio}}</h5>
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
        </div>
    </div>
</div>
 </div>
@endforeach 

@endsection
