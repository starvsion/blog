<?php

namespace App\Http\Controllers;

use App\Models\ContactMe;
use Illuminate\Http\Request;
use App\Http\Requests\ContactMeRequest;
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
        return view('contact-me');
    }

    public function list(Request $request)
    {
        $contactMeRecords = new ContactMe();

        if (! empty($request->searchQuery)) {
            $contactMeRecords->where('email', $request->query);
        }

        return ContactMeResource::collection($contactMeRecords->paginate($request->perPage ?? 50));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ContactMeRequest $request
     *
     * @return \Illuminate\Http\Response | array
     */
    public function store(ContactMeRequest $request)
    {
        try {
            ContactMe::create($request->only(['name', 'email', 'message']));

            return response('', 204);
        } catch (\Throwable $e) {
            return [
                'message' => $e->getMessage(),
            ];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\ContactMe $contactMe
     *
     * @return \Illuminate\Http\Response
     */
    public function show(ContactMe $contactMe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ContactMe $contactMe
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactMe $contactMe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ContactMe           $contactMe
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactMe $contactMe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ContactMe $contactMe
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactMe $contactMe)
    {
        //
    }
}
