<?php
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

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Statistic;
use App\Models\SummaryStatistic;
use Carbon\Carbon;
use Eseath\SxGeo\SxGeo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxStatistic extends Controller
{
    /**
     * @var string
     */
    protected $geodata = 'app/public/GeoIP.dat';
    /**
     * /**
     * 194.36.108.94
     * 84.17.51.233
     * 200.223.164.210
     *
     * @var string
     */
    protected  $ip = '194.36.108.94';

    /**
     * Определяем страницу сайта куда зашел
     */
    public function getHttpHost()
    {
        return $_SERVER['HTTP_REFERER'];
    }

    /**
     * пределяем страницу сайта откуда пришел ;)
     * @return mixed
     */
    public function getRequestURl()
    {
        return $_SERVER["REQUEST_URI"];
    }

    /**
     * Определяем дату
     * @return false|string
     */
    public function getDate()
    {
        return date("H:i:s d.m.Y");
    }

    /**
     * //Выявляем поисковых ботов
     */
    public function getUserAgent()
    {
        if (strstr($_SERVER['HTTP_USER_AGENT'], 'YandexBot')) {
            $bot='YandexBot';
        }
        elseif (strstr($_SERVER['HTTP_USER_AGENT'], 'Googlebot')) {
            $bot='Googlebot';
        }
        else {
            $bot=$_SERVER['HTTP_USER_AGENT'];
        }
        return $bot;
    }


    /**
     * Собираем ip
     * @return mixed
     */
    public function getIp()
    {

            if (!empty($_SERVER['HTTP_CLIENT_IP']))        // Определяем IP
            { $ip=$_SERVER['HTTP_CLIENT_IP']; }
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            { $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; }
            elseif ( $_SERVER['REMOTE_ADDR'] == '127.0.0.1')
                { $ip = $this->ip; }
            else { $ip=$_SERVER['REMOTE_ADDR']; }
            return $ip;
    }

    /**
     * @param string $ip
     *
     * @return mixed Регион
     */
    public function getRegion($ip)
    {
        $sxGeo = new SxGeo(storage_path($this->geodata));
        $region =  $sxGeo->getCityFull($ip);
        return $region['region']['name_ru'];
    }

    /**
     * @param string $ip
     *
     * @return mixed Страна
     */
    public function getCountry($ip)
    {
        $sxGeo = new SxGeo(storage_path($this->geodata));
        $country = $sxGeo->getCityFull($ip);
        return $country['country']['name_ru'];
    }

    /**
     * @param string $ip
     *
     * @return mixed Город
     */
    public function getCity($ip)
    {
        $sxGeo = new SxGeo(storage_path($this->geodata));
        $sity =  $sxGeo->getCityFull($ip);
        return $sity['city']['name_ru'];
    }

    /**
     * // определение мобильного устройства
     * @return bool
     */
    public function getOS($userAgent) {
        // Создадим список операционных систем в виде элементов массива
        $oses = array (
            'iPhone' => '(iPhone)',
            'Windows 3.11' => 'Win16',
            'Windows 95' => '(Windows 95)|(Win95)|(Windows_95)', // Используем регулярное выражение
            'Windows 98' => '(Windows 98)|(Win98)',
            'Windows 2000' => '(Windows NT 5.0)|(Windows 2000)',
            'Windows XP' => '(Windows NT 5.1)|(Windows XP)',
            'Windows 2003' => '(Windows NT 5.2)',
            'Windows Vista' => '(Windows NT 6.0)|(Windows Vista)',
            'Windows 7' => '(Windows NT 6.1)|(Windows 7)',
            'Windows NT 4.0' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
            'Windows NT 10' => '(Windows NT 10)',
            'Windows ME' => 'Windows ME|(Windows NT)',
            'Open BSD'=>'OpenBSD',
            'Sun OS'=>'SunOS',
            'Linux'=>'(Linux)|(X11)',
            'Safari' => '(Safari)',
            'Macintosh'=>'(Mac_PowerPC)|(Macintosh)',
            'QNX'=>'QNX',
            'BeOS'=>'BeOS',
            'OS/2'=>'OS/2',
            'Search Bot'=>'(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp/cat)|(msnbot)|(ia_archiver)'
        );
        foreach($oses as $os=>$pattern){
            if(preg_match("/".$pattern."/", $userAgent, $matches)) { // Пройдемся по массиву $oses для поиска соответствующей операционной системы.
                return $matches;
            }
        }
        return 'Unknown'; // Хрен его знает, чего у него на десктопе стоит.
    }

    public function getBrowser()
    {

    }


    public function setStatistic()
    {

        if ( config( 'valexo.ststistic' ) === true ) {

            $stat = new Statistic();
            $stat->created_at = Carbon::today()->format( "d-m-Y" );
            $stat->ip = $this->getIp();
            $stat->city = $this->getCity($this->getIp());
            $stat->region = $this->getRegion( $this->getIp() );
            $stat->country = $this->getCountry( $this->getIp() );
            $stat->browser = get_browser($this->getUserAgent(),false )->browser;
            $stat->platform = get_browser($this->getUserAgent(),false )->platform;
            $stat->device_type = get_browser($this->getUserAgent(),false )->device_type;
            $stat->useragent = $this->getUserAgent();
            $stat->visitor = 1;
            if (!isset($_COOKIE['userhash'])) {
                /* Если это новый пользователь, то добавляем ему cookie, уникальные для него */
                $userhash = uniqid();
                setcookie("userhash", $userhash, time()+86400);
                $stat->host = 1; //И еденичку в базу
            }
            $stat->request_url = $this->getRequestURl();
            $stat->http_referer = $this->getHttpHost();
            $stat->save();

            $stat = DB::table( 'statistics' )->where( 'created_at', '=', Carbon::today()->format( "d-m-Y" ) )->get();
            $v=0;
            $h=0;
            foreach ( $stat as $s ) {
                $v+=$s->visitor;
                $h+=$s->host;
            }
	        /**
	         * Если в суммарной статистике нет записей
	         * мы создадим первую и удалим все старые записи
	         * из текущей если же запись уже есть
	         * мы просто обновим данные и все)
	         */
            $query = DB::table('summary_statistic')->where('today', '=', Carbon::today()->format( "d-m-Y" ))->exists();

            if ($query == false) {
                $summ = new SummaryStatistic();
                $summ->today = Carbon::now('Europe/Moscow')->format( 'd-m-Y' );
                $summ->visitors = $v;
                $summ->hosts = $h;
                $summ->save();
	            DB::table( 'statistics' )->where( 'created_at', '<', Carbon::today()->format( "d-m-Y" ) )->delete();
            }else{
                DB::table('summary_statistic')
                  ->where('today', Carbon::today()->format( "d-m-Y" ))
                  ->update([
                      'today' =>Carbon::today()->format( "d-m-Y" ),
                      'visitors' => $v,
                      'hosts' => $h
                  ]);
            }



        }

    }

    /**
     * Количество пользователей на сайте
     */
    public function onlineCount() {

        $online_count = DB::table( 'sessions' )
                    ->where( 'last_activity', '>', (time() - (60)) )
                    ->count();
        $views = DB::table( 'summary_statistic' )->where('today','=',Carbon::now('Europe/Moscow')->format('d-m-Y'))->get();
       /* if (!DB::table('summary_statistic')->where('today', '=', Carbon::now('Europe/Moscow')->format('d-m-Y'))->exists() ) {
            DB::table('summary_statistic')->insert([
                  'today' => Carbon::now('Europe/Moscow')->format( 'd-m-Y' ),
                  'visitors' => 0,
                  'hosts' => 0
              ]);
        }*/

        if (DB::table('summary_statistic')->where('today', '=', Carbon::now('Europe/Moscow')->format('d-m-Y'))->exists() ) {

            foreach ($views as $k=>$v) {
                $json = array(
                    $k => $v,
                );
            }
            array_push($json, ["onlineCount" => $online_count]);

            return json_encode($json);
        }


    }

}
