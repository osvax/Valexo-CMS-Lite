<?php
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

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VA_Page extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view("page.main",[
            "dayrus" => $this->getDayRus(),
            "daterus" => $this->getDateRus(),
            "pages" => DB::table( 'pages' )->select( '*' )->orderBy( 'order' )->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("page.create",[
            "dayrus" => $this->getDayRus(),
            "daterus" => $this->getDateRus(),
            "pages" => Page::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *  id
     *  name
     *  uri
     *  image
     *  title
     *  keywords
     *  description
     *  text
     *  show
     *  creator
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {

	    $validator = $request->validated();

      /*  $messages = array(
            'required' => 'Поле $ не заполнено!',
        );
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'uri' => 'required',
        ],$messages);*/


            $page = new Page();
            $page->name = $request->input('name');
            $page->order = $request->input('order');
            $page->uri = $request->input('uri');
            $page->image = $request->input('image');
            $page->title = $request->input('title');
            $page->keywords = $request->input('keywords');
            $page->description = $request->input('description');
            $page->text = $request->input('text');
            $page->show = $request->input('show');
            $page->editor = $request->input('editor');
            $page->save();

            echo json_encode(["ok" => __('messages.pagecreate')]);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $id)
    {
        return view("page.edit",[
            "dayrus" => $this->getDayRus(),
            "daterus" => $this->getDateRus(),
            "data" => $id->toArray()
        ]);
    }


    public function editIndexPage()
    {
        $pages =  json_decode($_GET['page']);
        $count=0;
        foreach ($pages as $cat ) {
            $update = DB::table( 'pages' )
                        ->where( 'id', '=',$cat->id )
                        ->update([
                            'order' =>  $count+=1,
                        ]);
        }



      // debug(json_decode( $myData , true));
       /* foreach ( json_decode( $myData ) as $cat ) {

            if (  empty( $arr_cat[$cat->id]) ) {
                $arr_cat[$cat->id] = array();

            }
            $arr_cat[$cat->id][] = $cat;
        }

        debug( $arr_cat );*/

        /**
         * Это мы отправляем на сервер для Pages
         *
        foreach ( json_decode( $myData ) as $cat ) {
            debug($cat->id);
        }*/


       // echo "SO Good!";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = DB::table( 'pages' )
                    ->where( 'id', '=', $id )
                    ->update([
                        'name' => $request->input('name'),
                        'order' => $request->input('order'),
                        'uri' => $request->input('uri'),
                        'image' => $request->input('image'),
                        'title' => $request->input('title'),
                        'keywords' => $request->input('keywords'),
                        'description' => $request->input('description'),
                        'text' => $request->input('text'),
                        'show' => $request->input('show'),
                        'editor' => $request->input('editor')
                    ]);



       if(!$update){
           echo __('messages.notneedupdate');
        }else{
            echo __('messages.pageupdate');
        }

    }

    /**
     * @param \App\Models\Page $page
     *
     * @throws \Exception
     */
    public function destroy(Page $page)
    {
        $page->delete();
        echo __('messages.pagedelete');
    }
}
