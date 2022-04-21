<?php

namespace App\Http\Controllers;

use App\Models\Source;
use App\Http\Requests\StoreSourceRequest;
use App\Http\Requests\UpdateSourceRequest;
use Illuminate\Support\Facades\Auth;

class SourceController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Source::class, 'source');
    }

    /**
     * Display a listing of the source.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('home');
    }

    /**
     * Store a newly created source in storage.
     *
     * @param  \App\Http\Requests\StoreSourceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSourceRequest $request)
    {
        $validated = $request->validated();
        
        // Create a source
        $source = Source::create([
            'user_id' => Auth::user()->id,
            'title' => $validated['title'],
            'reference_url' => $validated['reference_url'],
            'date' => $validated['date'],
        ]);

        // Add tags to a source
        for($i = 0; $i < count($validated['tags']); $i++)
        {
            $tags[$i]['source_id'] = $source->id;
            $tags[$i]['name'] = $validated['tags'][$i];
        }

        $source->tags()->insert($tags);
        
        return redirect()->route('source.show', $source->uuid);
    }

    /**
     * Display the specified source.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function show(Source $source)
    {
        // Call necessary relationships
        $source->tags;
        
        return view('source.show', $source);
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
        $validated = $request->validated();

        $source->title = $validated['title'];
        $source->reference_url = $validated['reference_url'];
        $source->date = $validated['date'];
        $source->save();

        // Delete existing tags.
        $source->tags()->delete();

        // Add tags to a source
        for($i = 0; $i < count($validated['tags']); $i++)
        {
            $tags[$i]['source_id'] = $source->id;
            $tags[$i]['name'] = $validated['tags'][$i];
        }

        $source->tags()->insert($tags);    
        
        return redirect()->route('source.show', $source);
    }

    /**
     * Remove the specified source from storage.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy(Source $source)
    {
        // Delete existing tags.
        $source->tags()->delete();
        $source->delete();

        return redirect()->route('home');
    }
}
