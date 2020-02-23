@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-6">
                <div class="product-img w-100 text-center mx-auto bg-danger d-flex align-items-center">
                    <i class="fas fa-file-image mx-auto" style="font-size: 50px; color: white"></i>
                </div>
            </div>
            <div class="col-6 pl-5">
                <div class="row">
                    <div class="col-12">
                        <h1>{{ $product->name }}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pt-5">
                        <div class="product-price bg-warning d-inline-block py-3 px-5 h3">{{ number_format($product->price, 2, '.', '.') }}$</div>
                    </div>
                </div>
                <div class="row pt-5">
                    @if(isset(Auth::user()->name))
                        <div class="justify-content-end p-3 col-12">
                            <div v-on:click="addCart({{ $product->id }})" id="cart" product="{{ $product->id }}" class="btn px-5 py-3 btn-success"><h5 class="d-inline pr-3">Buy</h5><i style="font-size: 17px;" class="fas fa-shopping-cart"></i></div>
                        </div>
                    @else
                        <div class="d-flex col-12">
                            <p class="small p-2 bg-warning text-light">Register or Login to add to cart</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12">
                <h1>Description</h1>
            </div>
            <div class="col-12 pt-3">
                {{ $product->description }}
            </div>
        </div>
    </div>
@endsection
