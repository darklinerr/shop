<a href="{{ route('category', $child_category->id) }}" class="list-group-item list-group-item-action">{{ $child_category->name }}</a>
@if($child_category->categories)
    @foreach ($child_category->categories as $childCategory)
        @include('components.child_category', ['child_category' => $childCategory])
    @endforeach
@endif


