@extends('layouts.admin')

@section('content')
    <div class="container">
            <div class="row justify-content-between">
                <h1>Products</h1>
                <div class="d-flex align-items-center">
                    <a href="{{ route('admin.product.add') }}" class="btn btn-success"><i class="fas fa-plus pr-2"></i>Add product</a>
                </div>

            </div>
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <th class="align-middle">{{ $product->id }}</th>
                        <td class="align-middle">{{ $product->name }}</td>
                        <td class="align-middle">{{ $product->price }}</td>
                        <td>
                            <a href="{{ route('admin.product.show', $product->id) }}" class="btn btn-primary"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a href="{{ route('admin.product.delete', $product->id) }}" class="btn btn-danger"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No Products</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
