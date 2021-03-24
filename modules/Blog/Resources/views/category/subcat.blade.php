<ul class="uk-nestable-list">
@foreach($subcategories as $subcategory)
    <li class="uk-nestable-item">
        <div class="uk-nestable-panel">
            <i class="uk-nestable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>
            {{ $subcategory['name'] }}
            <div class="va_custom-control">
                <div class="custom-control custom-switch  custom-switch-off-success custom-switch-on-danger">
                    <input type="checkbox" checked class="custom-control-input" id="customSwitch{{ $subcategory['id'] }}">
                    <label class="custom-control-label" for="customSwitch{{ $subcategory['id'] }}"></label>
                </div>
                <a class="va_fa-pencil-alt-cat" href="#" title="Редактировать категорию {{ $cat['name'] }}"> <i id="{{ $subcategory['id'] }}" class="fas fa-edit va-edit-icon"></i></a>
                <i ata-toggle="modal" ata-target="#modal-sm" id="{{ $subcategory['id'] }}" class="fas pl-2 deletePage va-delete-icon-cat  fa-trash-alt"></i>

            </div>
        </div>
            @if(count($subcategory->subcategory))
                @include('blog::category.subcat',['subcategories' => $subcategory->subcategory])
            @endif
    </li>
@endforeach
</ul>