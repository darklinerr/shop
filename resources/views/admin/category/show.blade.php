@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.category.edit', $category)  }}" method="post">
        @csrf
        @method('put')
        <div class="container pt-5">
            <div class="row">
                <div class="form-group col-sm-12 mx-auto col-md-6">
                    <label for="exampleFormControlInput1">Name</label>
                    <input name="name" type="text" class="form-control" value="{{ $category->name }}" id="exampleFormControlInput1" placeholder="Name category">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-12 mx-auto col-md-6">
                    <label for="exampleFormControlSelect1">Parent Category</label>
                    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                        <option value="">-- Select Parent Category --</option>
                        @foreach($categories as $cat)
                            <option @if($cat->id == $category->category_id) selected @endif value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @foreach($cat->childrenCategories as $childCategory)
                                @include('admin.category.child_category', ['child_category' => $childCategory, 'category_id' => $category->category_id])
                            @endforeach
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-12 mx-auto col-md-6">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea name="description" class="form-control" placeholder="Description" id="exampleFormControlTextarea1" rows="3">{{ $category->description }}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 mx-auto">
                    <button type="submit" class="btn btn-primary col-12">Create</button>
                </div>
            </div>
        </div>
    </form>
@endsection
