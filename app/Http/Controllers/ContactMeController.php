<?php

namespace App\Http\Controllers;

use App\Models\ContactMe;
use Illuminate\Http\Request;
use App\Http\Resources\ContactMe as ContactMeResource;

class ContactMeController extends Controller
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

    public function list(Request $request) {
        $contactMeRecords = ContactMe::all();

        if (! empty($request->query)) {
            $contactMeRecords->search($request->query);
        };

        ContactMeResource::collection($contactMeRecords->paginate());
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactMe  $contactMe
     * @return \Illuminate\Http\Response
     */
    public function show(ContactMe $contactMe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactMe  $contactMe
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactMe $contactMe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactMe  $contactMe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactMe $contactMe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactMe  $contactMe
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactMe $contactMe)
    {
        //
    }
}
