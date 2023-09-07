<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use Illuminate\Http\Request;

class StatisticController extends Controller
{

    public function showday()
    {

        $lots = Lot::with("categories")
                        ->whereBetween('created_at',
                            [now()->startOfDay(), 
                            now()->endOfDay()])
                        ->latest()
                        ->paginate();

        return view('statistics.index', compact('lots'));
    }


    public function showweek()
    {

        $lots = Lot::with("categories")
                        ->whereBetween('created_at',
                            [now()->startOfWeek(), 
                            now()->endOfWeek()])
                        ->latest()
                        ->paginate();

        return view('statistics.index', compact('lots'));
    }

    public function showmonth()
    {

        $lots = Lot::with("categories")
                        ->whereBetween('created_at',
                            [now()->startOfMonth(), 
                            now()->endOfMonth()])
                        ->latest()
                        ->paginate();

        return view('statistics.index', compact('lots'));
    }

    public function showyear()
    {

        $lots = Lot::with("categories")
                        ->whereBetween('created_at',
                            [now()->startOfYear(), 
                            now()->endOfYear()])
                        ->latest()
                        ->paginate();

        return view('statistics.index', compact('lots'));
    }

}