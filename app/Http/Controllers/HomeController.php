<?php

namespace App\Http\Controllers;

// use App\Models\Lot;
use Carbon\Carbon;
use App\Models\Lot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
            $dailycount = Lot::whereBetween('created_at', 
                                [Carbon::now()->startOfDay(), 
                                Carbon::now()->endOfDay()])
                                ->lotcount();

            $weeklycount = Lot::whereBetween('created_at', 
                                [Carbon::now()->startOfWeek(), 
                                Carbon::now()->endOfWeek()])
                                ->lotcount();
            
            $monthlycount = Lot::whereBetween('created_at', 
                                [Carbon::now()->startOfMonth(), 
                                Carbon::now()->endOfMonth()])
                                ->lotcount();

            $yearlycount = Lot::whereBetween('created_at', 
                                [Carbon::now()->startOfYear(), 
                                Carbon::now()->endOfYear()])
                                ->lotcount();

            return view('layouts.index', 
                compact('dailycount',
                        'weeklycount',
                        'monthlycount',
                        'yearlycount'));
    }

    
}