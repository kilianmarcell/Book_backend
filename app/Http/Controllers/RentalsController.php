<?php

namespace App\Http\Controllers;

use App\Models\Rentals;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RentalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, int $id)
    {
        $rental = new Rentals();
        $rental->book_id = $id;
        $rental->start_date = Carbon::now();
        $rental->end_date = Carbon::now()->add(1, 'week');
        $rental->save();
        return response()->json($rental, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rentals  $rentals
     * @return \Illuminate\Http\Response
     */
    public function show(Rentals $rentals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rentals  $rentals
     * @return \Illuminate\Http\Response
     */
    public function edit(Rentals $rentals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rentals  $rentals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rentals $rentals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rentals  $rentals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rentals $rentals)
    {
        //
    }
}
