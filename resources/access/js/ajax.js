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


    $('input').on('change', function () {
        if ($('input').val() != null) {
            $(this).removeClass('is-invalid')
            $(this).addClass('is-valid')
        }else{
            $(this).removeClass('is-valid ')
            $(this).addClass('is-invalid')
        }
    });
    $('textarea').on('change', function () {
        if ($('textarea').val() != null) {
            $(this).removeClass('is-invalid')
            $(this).addClass('is-valid')
        }else{
            $(this).removeClass('is-valid ')
            $(this).addClass('is-invalid')
        }
    });

    /**
     * Количество онлайн
     */
    function onlineCount() {
        $.ajax({
            type: "GET",
            url: route('onlinecount'),
            // data: data,
            dataType: "json",
            cache: false,
            success: function (data) {
                $('#onlineCount').html(data[1].onlineCount + " чел");
                $('#hostsCount').html(data[0].hosts + " чел") ;
                $('#visitorsCount').html(data[0].visitors);
            }
        });
    }

setInterval(onlineCount,3000)





    $('#nestable').nestable().on('change', function(e) {
        let list   = e.length ? e : $(e.target);
        let nestableAjax = JSON.stringify(list.nestable('serialize'))

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "GET",
                    url: route('editindexpage'),
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



    /**
     * Добавление статьи
     */
    $(document).on('click', '.pageStoreSubmit', function (e) {
        let formdata = $("#form-data").serialize();
        $.ajax({
            type: "POST",
            url: route('admin.pages.store'),
            dataType: "json",
            data:formdata,
            cache: false,
            success: function (data) {
                if (data.ok) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: data.ok,
                        showConfirmButton: false,
                        timer: 2000
                    }).then((result) => {
                        if (!result.isConfirmed) {
                            setInterval(window.location.reload(),3000)
                        }
                    });

                }else{
                    for (var key in data) {
                        let   str = String(data[key]);
                        let  message = str.replace("$", $("#" + key).html());
                        $('input[name='+ key +']').addClass('is-invalid');
                        toastr.error(message);
                    }
                }
            }
        });
    });

    /**
     * Удаление страницы
      */

    $(document).on("click", ".deletePage", function () {
        let id = $(this).attr("id");
        Swal.fire({
            title: 'Хотите удалить?',
            text: "Вы не сможете отменить это действие!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Да, удалить!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "GET",
                    url: route("admin.pages.destroy", [id]),
                    dataType: "text",
                    cache: false,
                    error: function (data) {
                        toastr.error("Что-то пошло не так!");
                    },
                    success: function (data) {
                        Swal.fire(
                            'Выполнено!',
                            data,
                            'success'
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = route('admin.pages.index');
                            }
                        })
                    },
                });
            }
        });
    });

    /**
     * Обновление статьи
     */
    $(document).on('click', '.pageUpdateSubmit', function (e) {
        let id = $("#pageId").val();
        let formdata = $("#form-data").serialize();
        $.ajax({
            type: "PUT",
            url: route('admin.pages.update', [id]),
            dataType: "html",
            data:formdata,
            cache: false,
            error: function (data) {
                toastr.error(data);
            },
            success: function (data) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: data,
                    showConfirmButton: false,
                    timer: 2000
                }).then((result) => {
                    if (!result.isConfirmed) {
                        setInterval(window.location.reload(),3000)
                    }
                });
            }
        });
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
                $(".link").val("/" + data);
                // toastr.success(data);
            }
        });
    });


});
