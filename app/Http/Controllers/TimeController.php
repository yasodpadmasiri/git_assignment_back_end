<?php

namespace App\Http\Controllers;

use App\time;
use Illuminate\Http\Request;
use DateTime;
use DatePeriod;
use DateInterval;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $start = new DateTime('2012-09-06');
        $end = new DateTime('2012-09-06');
        // otherwise the  end date is excluded (bug?)
        $end->modify('+14 day');

        $interval = $end->diff($start);

        // total days
        $days = $interval->days;

        // dd($end);

        // create an iterateable period of date (P1D equates to 1 day)
        $period = new DatePeriod($start, new DateInterval('P1D'), $end);

        foreach($period as $dt) {
            $curr = $dt->format('D');

            // substract if Saturday or Sunday
            if ($curr == 'Sat' || $curr == 'Sun') {
                $days--;
            }

            // (optional) for the updated question
            // elseif (in_array($dt->format('Y-m-d'), $holidays)) {
            //     $days--;
            // }
        }

        dd($curr);
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
     * @param  \App\time  $time
     * @return \Illuminate\Http\Response
     */
    public function show(time $time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\time  $time
     * @return \Illuminate\Http\Response
     */
    public function edit(time $time)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\time  $time
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, time $time)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\time  $time
     * @return \Illuminate\Http\Response
     */
    public function destroy(time $time)
    {
        //
    }
}
