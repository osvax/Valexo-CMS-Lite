
@extends('layouts.app')
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('vendor/colorbox/colorbox.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/codemirror/lib/codemirror.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/codemirror/theme/ayu-dark.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/codemirror/theme/darcula.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/codemirror/theme/duotone-light.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/codemirror/theme/elegant.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/codemirror/theme/monokai.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/codemirror/theme/neo.css') }}">
    @endpush

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
            <div class="card-header"><i class="fal fa-info-circle"></i> {{ __('admin.editingpage') }} -  {{ $data['name'] }}</div>
			<div class="card-body ">
                <form id="form-data" method="GET">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="pageId" value="{{ $data['id'] }}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group text-right">
                                    <button type="button" class="btn btn-primary pageUpdateSubmit " onclick="CKupdate();">{{ __('admin.apllychanges') }}</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>{{ __('admin.namepage') }}</label>
                                        <input type="text" name="name"  class="form-control title" value="{{ $data['name'] }}" placeholder="Enter ...">
                                        @if($errors->has('name'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>{{ __('admin.index') }}</label>
                                        <input type="text" name="order" class="form-control " value="{{ $data['order'] }}" placeholder="Enter ..." readonly>
                                        @if($errors->has('order'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('order') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>{{ __('admin.urladress') }}</label>
                                        <input type="text" name="uri" class="form-control link" value="{{ $data['uri'] }}" placeholder="Enter ..." readonly>
                                        @if($errors->has('uri'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('uri') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>{{ __('admin.seotitle') }}</label>
                                        <input type="text" name="title"  class="form-control" value="{{ $data['title'] }}" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>{{ __('admin.seokeywords') }}</label>
                                        <input type="text" name="keywords" class="form-control" value="{{ $data['keywords'] }}" placeholder="Enter ...">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>{{ __('admin.seopagedescription') }}</label>
                                        <textarea name="description"  class="form-control "   placeholder="Enter ...">{{ $data['description'] }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>{{ __('admin.textpage') }}</label>
                                        <textarea @if($data['editor']) id="editor1" @else id="demotext"  @endif  name="text"  class="form-control anons">{{ $data['text'] }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div @if(!$data['editor']) class="col-sm-4" @else class="col-sm-6" @endif>
                                    <div class="form-group">
                                        <div class="custom-control custom-switch  custom-switch-of-success custom-switch-on-danger">
                                            <input type="checkbox" name="show"
                                                   @if($data['show'])
                                                       checked
                                                   @endif
                                            class="custom-control-input" id="onOffPage" >
                                            <label class="custom-control-label" for="onOffPage">{{ __('admin.onoffpage') }}</label>
                                        </div>
                                    </div>
                                </div>
                                @if(!$data['editor'])
                                <div class="col-sm-4 text-sm-center">
                                    <div class="form-group">
                                        <div class="custom-control custom-switch  custom-switch-of-success custom-switch-on-danger">
                                            <select onchange="selectTheme()" id="select" class="form-control form-control-solid">
                                                <option selected>elegant</option>
                                                <option>monokai</option>
                                                <option>darcula</option>
                                                <option>ayu-dark</option>
                                                <option>duotone-light</option>
                                                <option>neo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div @if(!$data['editor']) class="col-sm-4" @else class="col-sm-6" @endif>
                                    <div class="form-group">
                                        <div class="custom-control custom-switch  custom-switch-off-success custom-switch-on-danger">
                                            <input type="checkbox" name="editor"
                                                   @if($data['editor'])
                                                        checked
                                                   @endif   class="custom-control-input" id="onOffTinyMS" >
                                            <label class="custom-control-label" for="onOffTinyMS">{{ __('admin.turnofftexteditor') }}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="timeline-item">
                                        <div class="timeline-body">
                                            <img class="img-upload"  width="150" height="100" src="{{ $data['image'] }}" alt="{{ $data['title'] }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <label>{{ __('admin.miniature') }}</label>
                                    <div class="input-group input-group-sm">
                                        <input type="text" id="feature_image" name="image" value="{{ $data['image'] }}" class="form-control feature_image" readonly>
                                        <span class="input-group-append">
                    <button type="button" data-inputid="feature_image" class="btn btn-info btn-flat popup_selector">{{ __('admin.download') }}</button>
                  </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group text-right">
                            <button type="button" class="btn btn-primary pageUpdateSubmit " onclick="CKupdate();">{{ __('admin.apllychanges') }}</button>
                        </div>
                    </div>
                </form>
			</div>
		</div>
	</div>

    </div>

    </div>
    @push('scripts')
        <script src="{{ asset('vendor/colorbox/jquery.colorbox-min.js') }}"></script>
        <script src="{{ asset('packages/barryvdh/elfinder/js/standalonepopup.js') }}"></script>

        @if($data['editor'])
        <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace( 'editor1');
            function CKupdate() {
                for (instance in CKEDITOR.instances)
                    CKEDITOR.instances[instance].updateElement();
            }
        </script>
        @else
            <script src="{{ asset('vendor/codemirror/lib/codemirror.js') }}"></script>
            <script src="{{ asset('vendor/codemirror/javascript/javascript.js') }}"></script>
            <script>
                var editor = CodeMirror.fromTextArea(document.getElementById("demotext"), {
                    lineNumbers: true,
                    styleActiveLine: true,
                    matchBrackets: true
                });
                var input = document.getElementById("select");
                function selectTheme() {
                    var theme = input.options[input.selectedIndex].textContent;
                    editor.setOption("theme", theme);
                    location.hash = "#" + theme;
                }
                var choice = (location.hash && location.hash.slice(1)) ||
                    (document.location.search &&
                        decodeURIComponent(document.location.search.slice(1)));
                if (choice) {
                    input.value = choice;
                    editor.setOption("theme", choice);
                }
                CodeMirror.on(window, "hashchange", function() {
                    var theme = location.hash.slice(1);
                    if (theme) { input.value = theme; selectTheme(); }
                });
            </script>
        @endif

    @endpush
@endsection

