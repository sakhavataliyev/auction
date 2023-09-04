<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Lot\StoreRequest;
use App\Http\Requests\Lot\FilterRequest;
use App\Http\Requests\Lot\UpdateRequest;

class LotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lots = Lot::latest()->paginate(20);

        return view('lots.index', compact('lots'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lots.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        
        $lot = new Lot();
        $lot->title = $request->input('title');
        $lot->description = $request->input('description');
        $lot->save();
    
        $categories = $request->category_id; 
    
        // get category id and add to lot_categories
        $lot->categories()->sync($categories);


        return redirect()->route('lots.index')->with('success', 'Lot Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($lot)
    {
        $lots = Lot::findOrFail($lot);

        $categories = DB::table('lot_categories')
            ->where('lot_categories.lot_id', $lot)
            ->join('categories', 
                   'lot_categories.category_id', 
                   'categories.id')
            ->select('lot_categories.*',
                     'categories.*')
            ->get();


        return view('lots.show', compact('lots', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lot $lot)
    {
        return view('lots.edit', compact('lot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $lot)
    {
        $validated = $request->validated();

        $lot = Lot::findOrFail($lot);

        $lot->title = $request->input('title');
        $lot->description = $request->input('description');
        $lot->save();
    
        // get category id and update if necessary
        $categories = $request->input('category_id', []);
        $lot->categories()->sync($categories);


        return redirect()->route('lots.index')->with('success', 'Lot Updated Successfully!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($lot)
    {
        $lot = Lot::findOrFail($lot);
    
        $lot->delete();

        return redirect()->route('lots.index')->with('success', 'Lot Deleted Successfully!');
    }


    public function filter(FilterRequest $request)
    {

        $validated = $request->validated();

        $categoryIds = $request->input('category_id');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $query = Lot::query();

        if (!empty($categoryIds)) {
            $query->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('category_id', $categoryIds);
            });
        }

        if (!empty($startDate && $endDate)) {
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }

        $lots = $query->paginate(50);

    return view('lots.index', compact('lots'));
}
    
}