@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>

@endpush
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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body ">

                            <div class="datatable">
                                <table class="table text-center table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Название</th>
                                        <th>Публикаций</th>
                                        <th>Просмотров</th>
                                        <th>Статус</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Название</th>
                                        <th>Публикаций</th>
                                        <th>Просмотров</th>
                                        <th>Статус</th>
                                        <th>Действия</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($arrayAllParentCategory as $cat)
                                    <tr>
                                        <td>{{ $cat['name'] }}</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>
                                            <div class="custom-control custom-switch  custom-switch-off-success custom-switch-on-danger">
                                                <input type="checkbox" @if($cat['show']) checked  @endif class="custom-control-input" id="customSwitch{{ $cat['id']}}">
                                                <label class="custom-control-label" for="customSwitch{{ $cat['id']}}"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        </div>
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




    @push('scripts')
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
            <script type="text/javascript" src="{{ asset('access/demo/datatables-demo.js') }}"></script>

            <script>

                function prov() {
                    let select = document.getElementById('exampleFormControlSelect1').options.selectedIndex;
                    let txt= document.getElementById("exampleFormControlSelect1").options[select].text;
                    document.getElementById('exampleFormControlInput1').value = txt;
                }
            </script>
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
        <script src="{{ asset('access/js/jquery.nestable.js') }}" ></script>
    @endpush

@endsection
