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


import route from "../route";

$(document).ready(function () {

    function setStat() {
        $.ajax({
            type: "GET",
            url: route('setstatic'),
            // data: data,
            dataType: "html",
            cache: false,
            success: function (data) {
                //  $(".link").val(data);
                // toastr.success(data);
            }
        });
    }
    setStat();
});