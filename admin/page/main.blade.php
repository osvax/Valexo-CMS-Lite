
@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('vendor/uikit/css/uikit.min.css') }}">
@endpush
@section('content')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="file"></i></div>
                            {{ __('messages.pages') }} : {{ $daterus }} -  <span id="clock">{{ __('admin.clock') }}</span>
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
	<div class="col-sm-8">
		<div class="card">
			<div class="card-body ">
				<div class="card-header"><i class="fad fa-info-circle" data-toggle="tooltip" data-html="true" title="<em>Всплывающая подсказка</em> <u>с</u> <b>HTML</b>"></i> {{ __('messages.pages') }}</div>
                    <div class="card-body">
                        <div class="myadmin-qq qq">
                            <ol class="qq-list">
							@foreach($pages as $page)
                                <li class="qq-item" ata-id="{{ $page->id }}">
                                    <div class="qq-handle">{{ $page->name}}
										<div class="qq-handle_icon">
                                            <a class="va_fa-pencil-alt" href="{{ route('admin.pages.show', $page->id) }}" title="Редактировать страницу {{ $page->name }}"><i id="{{ $page->id }}" class="fas fa-edit va-edit-icon"></i></a>
                                            &#8942; <i ata-toggle="modal" ata-target="#modal-sm" id="{{ $page->id }}" class="fas pl-2 deletePage va-delete-icon  fa-trash-alt"></i>
										<div class="custom-control custom-switch  custom-switch-off-success custom-switch-on-danger">
                                           <input type="checkbox" checked class="custom-control-input" id="customSwitch{{ $page->id }}">
                                           <label class="custom-control-label" for="customSwitch{{ $page->id }}"></label>
                                       </div>
										</div>
									</div>

                                </li>
							@endforeach
                            </ol>
							<!--button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                           Создать страницу
                        </button-->
                            <hr>
                            <div class="form-group mt-3">
                                <a  class="btn btn-primary "  href="{{ route('admin.pages.create') }}">Создать страницу</a>
                            </div>
                        </div>
                    </div>
			</div>
		</div>
	</div>
	<div class="col-sm-4 ">
		<div class="card">
			<div class="card-body ">
				<div class="card-header"><i class="fad between fa-info-circle" data-toggle="tooltip" data-html="true" title="<em>Перетащите для изменения порядкового расположения страниц в меню.</em> "></i> {{ __('messages.reorder') }} </div>
                    <div class="card-body">
                        <div class="myadmin-dd-empty dd" id="nestable">
                            <ol class="dd-list">
							@foreach($pages as $page)
                                        <li class="dd-item dd3-item" data-id="{{ $page->id }}">
                                           <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">  {{ $page->name }} </div>
                                        </li>
							@endforeach
                            </ol>
                        </div>

                    </div>
                <div class="form-group mt-3">
                    <button class="btn btn-primary changeIndexPage"  >Поддвердить</button>
                </div>
			</div>
		</div>
	</div>
    </div>
<div class="modal fade" id="modal-xl">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Новая страница</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="form-data" method="POST">
                                    @csrf
                                    @method('POST')
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group text-right">
                                                <button type="button" class="btn btn-primary pageCreateSubmit " >Сохранить</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--div class="overlay">
                                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                                        <div class="text-bold pt-2">Loading...</div>
                                    </div-->
                                    <div class="card-body">

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Название страницы:</label>
                                                        <input type="text" name="name"  class="form-control title" value="" placeholder="Enter ...">
                                                        @if($errors->has('name'))
                                                            <div class="invalid-feedback">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Url страницы:</label>
                                                        <input type="text" name="uri" class="form-control link" value="" placeholder="Enter ..." readonly>
                                                        @if($errors->has('uri'))
                                                            <div class="invalid-feedback">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>SEO заголовок:</label>
                                                    <input type="text" name="title"  class="form-control" value="" placeholder="Enter ...">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>SEO ключевые слова:</label>
                                                    <input type="text" name="keywords" class="form-control" value="" placeholder="Enter ...">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                    <label>Описание страницы</label>
                                                    <textarea name="description"  class="form-control "   placeholder="Enter ..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- textarea -->
                                                    <div class="form-group">
                                                        <label>Описание страницы</label>
                                                        <textarea id="summernote"  name="text"  class="form-control "></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="custom-control custom-switch  custom-switch-of-success custom-switch-on-danger">
                                                            <input type="checkbox" name="show" checked   class="custom-control-input" id="onOffPage" >
                                                            <label class="custom-control-label" for="onOffPage">Вкл/Выкл страницу</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="custom-control custom-switch  custom-switch-off-success custom-switch-on-danger">
                                                            <input type="checkbox" name="editor" checked   class="custom-control-input" id="onOffTinyMS" >
                                                            <label class="custom-control-label" for="onOffTinyMS">Выключить текстовый редактор</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="timeline-item">
                                                    <div class="timeline-body">
                                                        <img class="img-upload"  width="150" height="100" src="https://placehold.it/150x100" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <label>Миниатюра:</label>
                                                <div class="input-group input-group-sm">
                                                    <input type="text" id="feature_image" name="image" class="form-control feature_image" readonly>
                                                    <span class="input-group-append">
                    <button type="button" data-inputid="feature_image" class="btn btn-info btn-flat popup_selector">Загрузить</button>
                  </span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                    <div class="col-sm-12">
                                        <div class="form-group text-right">
                                            <button type="button" class="btn btn-primary pageStoreSubmit " >Сохранить</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                    <div class="modal fade" id="modal-sm">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Удалить страницу?!</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Вы точно уверенны что хотите удалить даннцю страницу?</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                                    <button type="button" class="btn btn-primary confirmDeletPage" data-dismiss="modal">Да, удалить!</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

    </div>
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
                    maxDepth:1,
                }).on('change', updateOutput);


                updateOutput($('#nestable').data('output', $('#nestable-output')));

                $('#nestable').nestable().on('change', function(e) {
                    let list   = e.length ? e : $(e.target);
                    let nestableAjax = JSON.stringify(list.nestable('serialize'))

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "GET",
                        url: "{{ route('editindexpage') }}",
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

                });

            });
        </script>
        <script src="{{ asset('access/js/jquery.nestable.js') }}" ></script>
    @endpush
@endsection

