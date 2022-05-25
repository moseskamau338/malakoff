<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMailListRequest;
use App\Http\Requests\UpdateMailListRequest;
use App\Models\MailList;
use Illuminate\Support\Facades\Session;

class MailListController extends Controller
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
     * @param  \App\Http\Requests\StoreMailListRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreMailListRequest $request)
    {
         // somethong

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MailList  $mailList
     * @return \Illuminate\Http\Response
     */
    public function show(MailList $mailList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MailList  $mailList
     * @return \Illuminate\Http\Response
     */
    public function edit(MailList $mailList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMailListRequest  $request
     * @param  \App\Models\MailList  $mailList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMailListRequest $request, MailList $mailList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MailList  $mailList
     * @return \Illuminate\Http\Response
     */
    public function destroy(MailList $mailList)
    {
        //
    }
}
