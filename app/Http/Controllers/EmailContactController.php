<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmailContactRequest;
use App\Http\Requests\UpdateEmailContactRequest;
use App\Models\EmailContact;

class EmailContactController extends Controller
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
     * @param  \App\Http\Requests\StoreEmailContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmailContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmailContact  $emailContact
     * @return \Illuminate\Http\Response
     */
    public function show(EmailContact $emailContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmailContact  $emailContact
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailContact $emailContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmailContactRequest  $request
     * @param  \App\Models\EmailContact  $emailContact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmailContactRequest $request, EmailContact $emailContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmailContact  $emailContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailContact $emailContact)
    {
        //
    }
}
