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

namespace Modules\Blog\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VA_Category extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $arrayAllParentCategory = Category::where('parent_id',0)->orderBy('order')->get();
        $query = Category::where('parent_id',0)->count();






     //   debug( $arrayAllParentCategory);
        return view( 'blog::category.main',[
            "dayrus" => $this->getDayRus(),
            "daterus" => $this->getDateRus(),
        ], compact('arrayAllParentCategory')
        );
    }

  /*  public function menu_showNested($parentID) {
        $numRows = Category::where('parent_id',$parentID)->get();

        if ($numRows > 0) {
            echo "\n";
            echo "<ol class=\"dd-list\">\n";
            while($row = mysql_fetch_array($result)) {
                echo "\n";
                echo "<li class="dd-item" data-id="{$row[" id']}'="">\n";
                    echo "<div class="dd-handle">{$row['id']}: {$row['name']}</div>\n";
                    menu_showNested($row['id']);
                echo "</li>\n";
            }
        echo "</ol>\n";
    }
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

	/**
	 *
	 */
    public function updateSortCategory()
    {
	    $id =  json_decode($_GET['id']);
	    $parent_id =  json_decode($_GET['parent_id']);

	    $update = DB::table( 'categories' )
	                ->where( 'id', '=', $id)
	                ->update([
		                'parent_id' =>  $parent_id,
	                ]);
    }
}
