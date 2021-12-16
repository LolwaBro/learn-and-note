<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubtopicRequest;
use App\Http\Requests\UpdateSubtopicRequest;
use App\Models\Subtopic;

class SubtopicController extends Controller
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
     * @param  \App\Http\Requests\StoreSubtopicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubtopicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subtopic  $subtopic
     * @return \Illuminate\Http\Response
     */
    public function show(Subtopic $subtopic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subtopic  $subtopic
     * @return \Illuminate\Http\Response
     */
    public function edit(Subtopic $subtopic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubtopicRequest  $request
     * @param  \App\Models\Subtopic  $subtopic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubtopicRequest $request, Subtopic $subtopic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subtopic  $subtopic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subtopic $subtopic)
    {
        //
    }
}
