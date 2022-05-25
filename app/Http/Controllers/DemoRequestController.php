<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDemoRequestRequest;
use App\Http\Requests\UpdateDemoRequestRequest;
use App\Models\DemoRequest;

class DemoRequestController extends Controller
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
     * @param  \App\Http\Requests\StoreDemoRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDemoRequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DemoRequest  $demoRequest
     * @return \Illuminate\Http\Response
     */
    public function show(DemoRequest $demoRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DemoRequest  $demoRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(DemoRequest $demoRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDemoRequestRequest  $request
     * @param  \App\Models\DemoRequest  $demoRequest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDemoRequestRequest $request, DemoRequest $demoRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DemoRequest  $demoRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(DemoRequest $demoRequest)
    {
        //
    }
}
