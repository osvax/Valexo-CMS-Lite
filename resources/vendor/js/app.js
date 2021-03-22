/*
 * @project   Автор проекта - Valexo CMS Lite
 * @author    Valentin Alexo
 * @email     osvax@yandex.com
 * @phone    +7(909)057-22-69
 *
 * Создание сайтов и интернет магазинов, посадочных страниц
 * Разработка проектов на Laravel. SEO и SMM продвижение.
 * Copyright (C) 2020 - 2021, Inc - Все права защищены
 *
 */

import route from "../../route";

$(document).ready(function () {


 function clock(){
        var date = new Date(),
            hours = (date.getHours() < 10) ? '0' + date.getHours() : date.getHours(),
            minutes = (date.getMinutes() < 10) ? '0' + date.getMinutes() : date.getMinutes(),
            seconds = (date.getSeconds() < 10) ? '0' + date.getSeconds() : date.getSeconds();
        document.getElementById('clock').innerText = hours + ':' + minutes + ':' + seconds;
    }
    setInterval(clock, 1000);
	
	$(document).on("click", ".deletePage", function () {
        let id = $(this).attr("id");
        let res = confirm("Подтвердите действия");
        if (!res) {
            return false;
        }else{ 
            $.ajax({
                type: "GET",
                url: route("admin.pages.destroy", [id]),
                dataType: "text",
                cache: false,
                error: function (data) {
                    toastr.error("Что-то пошло не так!");
                },
                success: function (data) {
                    toastr.success(data);
                    location.reload();
                },
            });
        }
    });


    /**
     * Инициализация редактора TinyMsi
     */
    tinymce.init({
        selector: '#textarea',
        plugins: 'pagebreak anchor hr preview print charmap image a11ychecker advcode casechange formatpainter  autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable  tinymcespellchecker',
        // toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
        toolbar_mode: 'floating',
        tinycomments_author: 'Valentin Alexo',
        language: 'ru',
        force_br_newlines : false,
        force_p_newlines : false,
        forced_root_block : '',
        relative_urls: false,
        height : "380",
        file_picker_callback : elFinderBrowser
    });








    /**
     * Транслитерация URL
     */

    $('.title').keyup(function () {
        let text = $(".title").val();
        $.ajax({
            type: "GET",
            url: route('ftranslite', [text]),
           // data: data,
            dataType: "html",
            cache: false,
            success: function (data) {
                $(".link").val(data);
               // toastr.success(data);
            }
        });
    });
    /**
     * Добавление статьи
     */
    $(document).on('click', '.pageStoreSubmit', function (e) {
        let formdata = $("#form-data").serialize();
        $.ajax({
            type: "POST",
            url: route('admin.pages.store'),
            dataType: "html",
            data:formdata,
            cache: false,
            error: function (data) {
                toastr.error('Что-то пошло не так!');
                $("#modal-xl").fadeOut(1000, function () {
                    location.reload();
                });
            },
            success: function (data) {
                toastr.success(data);
                $("#modal-xl").fadeOut(3000, function () {
                    location.reload();
                });


            }
        });
    });



});


function elFinderBrowser (callback, value, meta) {
    tinymce.activeEditor.windowManager.openUrl({
        title: 'Файловый менеджер',
        url: '/elfinder/tinymce5',
        /**
         * On message will be triggered by the child window
         *
         * @param dialogApi
         * @param details
         * @see https://www.tiny.cloud/docs/ui-components/urldialog/#configurationoptions
         */
        onMessage: function (dialogApi, details) {
            if (details.mceAction === 'fileSelected') {
                const file = details.data.file;

                // Make file info
                const info = file.name;

                // Provide file and text for the link dialog
                if (meta.filetype === 'file') {
                    callback(file.url, {text: info, title: info});
                }

                // Provide image and alt text for the image dialog
                if (meta.filetype === 'image') {
                    callback(file.url, {alt: info});
                }

                // Provide alternative source and posted for the media dialog
                if (meta.filetype === 'media') {
                    callback(file.url);
                }

                dialogApi.close();
            }
        }
    });
}

/**
 * Установка кук
 * @param name
 * @param value
 * @param options
 */
function setCookie(name, value, options = {}) {

    options = {
        path: '/',
        // при необходимости добавьте другие значения по умолчанию
        ...options
    };

    if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
    }

    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

    for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
    }

    document.cookie = updatedCookie;
}

/**
 * Удаление кук
 * @param name
 */
function deleteCookie(name) {
    setCookie(name, "", {
        'max-age': -1
    })
}

/**
 * возвращает куки с указанным name,
 * или undefined, если ничего не найдено
 * @param name
 * @returns {string|undefined}
 */
function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}


var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 5000
});

$('.swalDefaultSuccess').click(function() {
    Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
});
$('.swalDefaultInfo').click(function() {
    Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
});
$('.swalDefaultError').click(function() {
    Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
});
$('.swalDefaultWarning').click(function() {
    Toast.fire({
        icon: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
});
$('.swalDefaultQuestion').click(function() {
    Toast.fire({
        icon: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
});

$('.toastrDefaultSuccess').click(function() {
    toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
});
$('.toastrDefaultInfo').click(function() {
    toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
});
$('.toastrDefaultError').click(function() {
    toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
});
$('.toastrDefaultWarning').click(function() {
    toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
});


