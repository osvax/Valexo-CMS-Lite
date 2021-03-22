@foreach($subcategories as $subcategory)
    <ol class="dd-list">
        <li class="dd-item dd3-item" data-id="{{ $subcategory['id'] }}">
            <div class="dd-handle dd3-handle"></div>
            <div class="dd3-content"> {{ $subcategory['id'] }}- {{ $subcategory['name'] }} </div>
        </li>
        @if(count($subcategory->subcategory))
            @include('category.subcat',['subcategories' => $subcategory->subcategory])
        @endif
    </ol>
@endforeach
