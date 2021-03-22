@extends('layouts.app')
@section('content')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="file"></i></div>
                            {{ __('messages.category') }} : {{ $daterus }} -  <span id="clock">{{ __('admin.clock') }}</span>
                        </h1>
                    </div>
                    <!--div class="col-12 col-xl-auto mb-3">Optional page header content</div-->
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="col-12">
        <div class="row">
    <div class=" col-4">
        <div class="card">
            <div class="card-header">{{ __('messages.category') }}</div>
            <div class="card-body">
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('messages.category') }}
                    </h2>
                </x-slot>

                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="form-group">
                            <label for="categoryInput">{{ __('messages.new_category') }}</label>
                            <input class="form-control" id="categoryInput" type="text" placeholder="{{ __('messages.write_category') }}">
                        </div>

                        <div class="card-body">
                            <button type="button" class="btn btn-success swalDefaultSuccess">
                                Launch Success Toast
                            </button>
                            <button type="button" class="btn btn-info swalDefaultInfo">
                                Launch Info Toast
                            </button>
                            <button type="button" class="btn btn-danger swalDefaultError">
                                Launch Error Toast
                            </button>
                            <button type="button" class="btn btn-warning swalDefaultWarning">
                                Launch Warning Toast
                            </button>
                            <button type="button" class="btn btn-default swalDefaultQuestion">
                                Launch Question Toast
                            </button>
                            <div class="text-muted mt-3">
                                For more examples look at <a href="https://sweetalert2.github.io/">https://sweetalert2.github.io/</a>
                            </div>
                        </div>
                        <!-- /.card -->
                        <div class="card-body">
                            <button type="button" class="btn btn-success toastrDefaultSuccess">
                                Launch Success Toast
                            </button>
                            <button type="button" class="btn btn-info toastrDefaultInfo">
                                Launch Info Toast
                            </button>
                            <button type="button" class="btn btn-danger toastrDefaultError">
                                Launch Error Toast
                            </button>
                            <button type="button" class="btn btn-warning toastrDefaultWarning">
                                Launch Warning Toast
                            </button>
                            <div class="text-muted mt-3">
                                For more examples look at <a href="https://codeseven.github.io/toastr/">https://codeseven.github.io/toastr/</a>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!--Toggle this custom switch element-->
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Toggle this custom switch element</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3">
                        <label class="custom-control-label" for="customSwitch3">Toggle this custom switch element with custom colors danger/success</label>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- CategoriesController edit-->
    <div class=" col-4">
        <div class="card">
            <div class="card-header">{{ __('messages.category') }}</div>
            <div class="card-body">
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('messages.category') }}
                    </h2>
                </x-slot>

                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">{{ __('messages.new_category') }}</label>
                            <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="{{ __('messages.write_category') }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select class="form-control" id="exampleFormControlSelect1" onChange='prov()'>
                                <option>Категория 1</option>
                                <option>Категория 2</option>
                                <option>Категория 3</option>
                                <option>Категория 4</option>
                                <option>Категория 5</option>
                            </select>
                        </div>
                        <button class="btn btn-primary mr-2 my-1" type="button">Primary</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

            <div class="col-4">
                <div class="card">
                    <div class="card-header">{{ __('messages.category') }}</div>
                    <div class="card-body">
                        <div class="myadmin-dd-empty dd" id="nestable">
                            <ol class="dd-list">
                                @foreach($arrayAllParentCategory as $cat)
                                        <li class="dd-item dd3-item" data-id="{{ $cat['id'] }}">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content"> {{ $cat['id'] }}- {{ $cat['name'] }} </div>
                                            @if(count($cat->subcategory))
                                               @include('subcat',['subcategories' => $cat->subcategory])
                                            @endif
                                        </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <script>

        function prov() {
            let select = document.getElementById('exampleFormControlSelect1').options.selectedIndex;
            let txt= document.getElementById("exampleFormControlSelect1").options[select].text;
            document.getElementById('exampleFormControlInput1').value = txt;
        }
    </script>
    @push('scripts')
        <script type="text/javascript">

            $(document).ready(function() {
                // Nestable
                var updateOutput = function(e)
                {
                    var list   = e.length ? e : $(e.target),
                        output = list.data('output');
                    if (window.JSON) {
                        output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                    } else {
                        output.val('JSON browser support required for this demo.');
                    }
                };

                // activate Nestable for list 1
                $('#nestable').nestable({
                    group: 1,
                    maxDepth:5,
                }).on('change', updateOutput);


                updateOutput($('#nestable').data('output', $('#nestable-output')));

                $('#nestable').nestable().on('change', function(e) {
                    let list   = e.length ? e : $(e.target);
                    let nestableAjax = JSON.stringify(list.nestable('serialize'))
                    console.log(JSON.stringify(list.nestable('serialize')));
                    $.ajax({
                        type: "GET",
                        url: "{{ route('editindexpage') }}",
                        dataType: "AJAX",
                        data: {myData:nestableAjax},
                        error: function (response) {
                            console.log(response)
                        },
                        success: function (response) {
                            console.log(response)
                        }
                    });
                });


            });
        </script>
        <script src="{{ asset('access/js/jquery.nestable.js') }}" ></script>
    @endpush

@endsection
