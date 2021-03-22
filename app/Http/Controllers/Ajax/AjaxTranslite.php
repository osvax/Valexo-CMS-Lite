<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxTranslite extends Controller
{
    /**
     * @param $name
     *
     * @return string
     */
    public function ftranslite($name)
    {

        $trans = array('а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
                       'е' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' =>
                           'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' =>
                           't', 'у' => 'u', 'ф' => 'f', 'ы' => 'i', 'э' => 'e', 'А' => 'A', 'Б' => 'B', 'В' =>
                           'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ж' => 'ZH', 'З' => 'Z', 'И' => 'I',
                       'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' =>
                           'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Ы' => 'I', 'Э' =>
                           'E', 'ё' => "yo", 'х' => "h", 'ц' => "ts", 'ч' => "ch", 'ш' => "sh", 'щ' =>
                           "shch", 'ъ' => "", 'ь' => "", 'ю' => "yu", 'я' => "ya", 'Ё' => "YO", 'Х' => "H",
                       'Ц' => "TS", 'Ч' => "CH", 'Ш' => "SH", 'Щ' => "SHCH", 'Ъ' => "", 'Ь' => "", 'Ю' =>
                           "YU", 'Я' => "YA");

        $strstring = strtr($name, $trans);
        return strtolower($this->clear_char($strstring));
    }

    /**
     * @param $str
     *
     * @return string|string[]|null
     */
    public function clear_char($str){
        $str = preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/"," ",$str);
        $str = preg_replace('/[\s]{2,}/', "-", $str);
        $str = preg_replace("/[\s+]/", "-", $str);
        return $str;
    }
}
