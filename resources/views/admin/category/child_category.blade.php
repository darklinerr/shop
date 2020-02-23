<option @if(isset($category_id) && $child_category->id == $category_id) selected @endif value="{{ $child_category->id }}">{{ $child_category->name }}</option>
@if($child_category->categories)
    @foreach ($child_category->categories as $childCategory)
        @include('admin.category.child_category', ['child_category' => $childCategory])
    @endforeach
@endif

