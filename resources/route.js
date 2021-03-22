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

"use_strict"

let routes = require('../routes/routes.json');

/**
 * route('home', ['1'])
 */
export default function () {
    let args = Array.prototype.slice.call(arguments);
    let name = args.shift();

    if (routes[name] === undefined) {
        console.log('Маршрута не существует');
    }else{
        return '/' + routes[name].split('/').map(function (str){
            if(str[0] == '{'){
                return args.shift();
            }
            else {
                return str;
            }
        }).join('/');
    }
};


