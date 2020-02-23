@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row justify-content-between">
                <h1>Categories</h1>
                <div class="d-flex align-items-center">
                    <a href="{{ route('admin.category.add') }}" class="btn btn-success"><i class="fas fa-plus pr-2"></i>Add category</a>
                </div>

            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categories as $category)

                    <tr>
                        <th class="align-middle">{{ $category->id }}</th>
                        <td class="align-middle">{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('admin.category.show', $category->id) }}" class="btn btn-primary"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a href="{{ route('admin.category.delete', $category->id) }}" class="btn btn-danger"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">asdasfasd</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
