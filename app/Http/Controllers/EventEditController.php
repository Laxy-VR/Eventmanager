<?php

namespace App\Http\Controllers;

use App\Models\EventEdit;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventEditRequest;
use App\Http\Requests\UpdateEventEditRequest;

class EventEditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('events.edit');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventEditRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EventEdit $eventEdit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventEdit $eventEdit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventEditRequest $request, EventEdit $eventEdit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventEdit $eventEdit)
    {
        //
    }
}
