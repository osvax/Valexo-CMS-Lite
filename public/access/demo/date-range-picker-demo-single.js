/*
 * @project   Автор проекта - Valexo CMS LIte
 * @author    Valentin Alexo
 * @email     osvax@yandex.com
 * @phone    +7(909)057-22-69
 *
 * Создание сайтов и интернет магазинов, посадочных страниц
 * Разработка проектов на Laravel. SEO и SMM продвижение.
 * Copyright (C) 2020 - 2021, Inc - Все права защищены
 */

$(function () {
    $('input[name="birthday"]').daterangepicker(
        {
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format("YYYY"), 10),
        }
    );
});
