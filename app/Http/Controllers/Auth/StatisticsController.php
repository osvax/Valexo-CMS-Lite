<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Statistic;
use App\Models\SummaryStatistic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{

    /**
     * @var
     */
    protected $visitors;
    /**
     * @var
     */
    protected $hosts;


    protected $today;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $todaysAray = DB::table( 'summary_statistic' )->get();
        $views = DB::table( 'summary_statistic' )->where('today','=',Carbon::now('Europe/Moscow')->format('d-m-Y'))->get();

        foreach ($views as $v) {

            $this->today = $v->today;
            $this->visitors = $v->visitors;
            $this->hosts = $v->hosts;
        }


        return view("stat",[
            "dayrus" => $this->getDayRus(),
            "daterus" => $this->getDateRus(),
            "pages" => Page::all(),
            'todaysAray' => $todaysAray,
            'visitors' => $this->visitors,
            'hosts' => $this->hosts,
        ]);





    }

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
}
