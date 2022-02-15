<?php

namespace App\Http\Controllers;

use App\Models\Takeaway;
use App\Http\Requests\StoreTakeawayRequest;
use App\Http\Requests\UpdateTakeawayRequest;

class TakeawayController extends Controller
{
    /**
     * Display a listing of the takeaway.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new takeaway.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created takeaway in storage.
     *
     * @param  \App\Http\Requests\StoreTakeawayRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTakeawayRequest $request)
    {
        //
    }

    /**
     * Display the specified takeaway.
     *
     * @param  \App\Models\Takeaway  $takeaway
     * @return \Illuminate\Http\Response
     */
    public function show(Takeaway $takeaway)
    {
        //
    }

    /**
     * Show the form for editing the specified takeaway.
     *
     * @param  \App\Models\Takeaway  $takeaway
     * @return \Illuminate\Http\Response
     */
    public function edit(Takeaway $takeaway)
    {
        //
    }

    /**
     * Update the specified takeaway in storage.
     *
     * @param  \App\Http\Requests\UpdateTakeawayRequest  $request
     * @param  \App\Models\Takeaway  $takeaway
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTakeawayRequest $request, Takeaway $takeaway)
    {
        //
    }

    /**
     * Remove the specified takeaway from storage.
     *
     * @param  \App\Models\Takeaway  $takeaway
     * @return \Illuminate\Http\Response
     */
    public function destroy(Takeaway $takeaway)
    {
        //
    }
}
