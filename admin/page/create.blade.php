
@extends('layouts.app')
@push('styles_after')
    <link rel="stylesheet" href="{{ asset('vendor/colorbox/colorbox.css') }}">
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
	<div class="col-sm-12 ">
		<div class="card">
            <div class="card-header"><i class="fal fa-info-circle"></i> Новая страница</div>
			<div class="card-body ">
                <form id="form-data" method="POST">
                    @csrf
                    @method('POST')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group text-right">
                                    <button type="button" class="btn btn-primary pageStoreSubmit " onclick="CKupdate();">Сохранить</button>
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
                                        <label id="name">Название страницы:</label>
                                        <input type="text" name="name"   class="form-control title" value="" placeholder="Enter ...">

                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label id="order">{{ __('admin.order') }}</label>
                                        <input type="text" name="order" class="form-control " value="0" >

                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label id="uri">Url страницы:</label>
                                        <input type="text" name="uri" class="form-control link" value="" placeholder="Enter ..." readonly>
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
                                        <label>SEO Описание страницы</label>
                                        <textarea name="description"  class="form-control "   placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Описание страницы</label>
                                        <textarea id="ckeditor"  name="text"  class="form-control anons"></textarea>
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
                                            <input type="checkbox" name="editor"   class="custom-control-input" id="onOffTinyMS" >
                                            <label class="custom-control-label" for="onOffTinyMS">Включить текстовый редактор</label>
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
                            <button type="button" class="btn btn-primary pageStoreSubmit " onclick="CKupdate();">Сохранить</button>
                        </div>
                    </div>
                </form>
			</div>
		</div>
	</div>

    </div>


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
        <script src="{{ asset('vendor/colorbox/jquery.colorbox-min.js') }}"></script>
        <script src="{{ asset('packages/barryvdh/elfinder/js/standalonepopup.js') }}"></script>
        <script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('vendor/codemirror/lib/codemirror.js') }}"></script>
        <script src="{{ asset('vendor/codemirror/javascript/javascript.js') }}"></script>



        <script>

            CKEDITOR.replace( 'ckeditor' );

            function CKupdate() {
                for (instance in CKEDITOR.instances)
                    CKEDITOR.instances[instance].updateElement();
            }

        </script>
    @endpush
@endsection

