@extends('layouts.main')

@section('content')

    <div id="alert"></div>
<div class="container">
    <div class="row">
        <div class="products col-9">
            <div class="row p-3">
                @forelse($products as $product)
                    <div class="col-4 py-3">
                        <div class="card p-3">
                            <div class="row p-3">
                                <div class="img w-100 text-center p-5 mx-auto bg-danger">
                                    <i class="fas fa-file-image mx-auto" style="font-size: 50px; color: white"></i>
                                </div>
                            </div>
                            <div class="row px-3">
                                <div class="name h5 py-2"><a href="{{ route('product', $product->id) }}">{{ $product->name }}</a></div>
                            </div>
                            <div class="row px-3">
                                <div class="name h3">{{ number_format($product->price, 2, '.', '.') }}$</div>
                            </div>
                            @if(isset(Auth::user()->name))
                                <div class="row justify-content-end p-3">
                                    <div v-on:click="addCart({{ $product->id }})" id="cart" product="{{ $product->id }}" class="btn px-4 btn-success"><i style="font-size: 17px;" class="fas fa-shopping-cart"></i></div>
                                </div>
                            @else
                                <div class="d-flex justify-content-end">
                                    <p class="small p-2 text-right bg-warning text-light">Register or Login to add to cart</p>
                                </div>

                            @endif
                        </div>
                    </div>
                @empty
                    <h1>No products</h1>
                @endforelse
            </div>
            <div class="row">
                {{ $products->links() }}
            </div>
        </div>
        <div class="categories col-3">
            <div class="list-group">
                @foreach($categories as $cat)
                    <a href="{{ route('category', $cat->id) }}" class="list-group-item h3 m-0 list-group-item-action">{{ $cat->name }}</a>
{{--                    <div class="list-group-item list-group-item-action h3 m-0">{{ $cat->name }}</div>--}}
                    @foreach($cat->childrenCategories as $childCategory)
                        @include('components.child_category', ['child_category' => $childCategory])
                    @endforeach
                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection
