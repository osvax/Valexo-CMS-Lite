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
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">{{ __('messages.category') }}</div>
                    <div class="card-body ">

                            <ul class="uk-nestable" data-uk-nestable="{handleClass:'uk-nestable-handle'}">
                                @foreach($arrayAllParentCategory as $cat)
                                <li class="uk-nestable-item">
                                    <div class="uk-nestable-panel text-left">
                                            <i class="uk-nestable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>
                                        {{ $cat['name'] }}
                                        <div class="va_custom-control">
                                            <div class="custom-control custom-switch  custom-switch-off-success custom-switch-on-danger">
                                                <input type="checkbox" checked class="custom-control-input" id="customSwitch{{ $cat['id'] }}">
                                                <label class="custom-control-label" for="customSwitch{{ $cat['id'] }}"></label>
                                            </div>
                                             <a class="va_fa-pencil-alt-cat" href="#" title="Редактировать категорию {{ $cat['name'] }}"> <i id="{{ $cat['id'] }}" class="fas fa-edit va-edit-icon"></i></a>
                                              <i ata-toggle="modal" ata-target="#modal-sm" id="{{ $cat['id'] }}" class="fas pl-2 deletePage va-delete-icon-cat  fa-trash-alt"></i>

                                        </div>
                                    </div>
                                        @if(count($cat->subcategory))
                                            @include('blog::category.subcat',['subcategories' => $cat->subcategory])
                                        @endif
                                </li>
                                @endforeach
                            </ul>


                    </div>

                </div>
                <hr>
                <div class="form-group mt-3">
                    <a  class="btn btn-primary "  href="{{ route('admin.pages.create') }}">Создать страницу</a>
                </div>
            </div>


            <!--div-- class="col-sm-12">
                <div class="card">
                    <div class="card-header">{ __('messages.category') }}</div>
                    <div class="card-body">
                        <div class="myadmin-dd-empty dd" id="nestable">
                            <ol class="dd-list">
                                foreach($arrayAllParentCategory as $cat)
                                        <li class="dd-item dd3-item" data-id="{ $cat['id'] }}">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content"> { $cat['id'] }}- { $cat['name'] }} </div>
                                            if(count($cat->subcategory))
                                               include('category.subcat',['subcategories' => $cat->subcategory])
                                            endif
                                        </li>
                                endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div-->



    @push('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/uikit/css/uikit.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/uikit/css/components/nestable.min.css') }}"/>

    @endpush
    @push('scripts')
                    <script type="text/javascript" src="{{ asset('vendor/uikit/js/core/core.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('vendor/uikit/js/components/nestable.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('vendor/uikit/js/uikit.min.js') }}"></script>


                    <script>

                function prov() {
                    let select = document.getElementById('exampleFormControlSelect1').options.selectedIndex;
                    let txt= document.getElementById("exampleFormControlSelect1").options[select].text;
                    document.getElementById('exampleFormControlInput1').value = txt;
                }
            </script>
        <script type="text/javascript">

            $(document).ready(function() {
                var nestable = UIkit.nestable('.uk-nestable', {
                    maxDepth:3
                });

             /*   $('#nestable').nestable().on('change', function(e) {
                    let list   = e.length ? e : $(e.target);
                    let nestableAjax = JSON.stringify(list.nestable('serialize'))

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "GET",
                        url: " route('editindexpage') }}",
                        dataType: "html",
                        data: {page:nestableAjax},
                        error: function (data) {
                            toastr.error("Ошибка");
                        },
                        success: function (data) {
                            toastr.success("Сортировка изменена");
                            setInterval(window.location.reload(),3000)
                        }
                    });

                });*/
            });
        </script>
    @endpush

@endsection
