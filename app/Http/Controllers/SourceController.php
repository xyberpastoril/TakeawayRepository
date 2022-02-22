<?php

namespace App\Http\Controllers;

use App\Models\Source;
use App\Http\Requests\StoreSourceRequest;
use App\Http\Requests\UpdateSourceRequest;

class SourceController extends Controller
{
    /**
     * Display a listing of the source.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created source in storage.
     *
     * @param  \App\Http\Requests\StoreSourceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSourceRequest $request)
    {
        //
    }

    /**
     * Display the specified source.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function show(Source $source)
    {
        //
    }

    /**
     * Update the specified source in storage.
     *
     * @param  \App\Http\Requests\UpdateSourceRequest  $request
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSourceRequest $request, Source $source)
    {
        //
    }

    /**
     * Remove the specified source from storage.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy(Source $source)
    {
        //
    }
}
