<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMeRequest;
use App\Http\Resources\ContactMe as ContactMeResource;
use App\Models\ContactMe;
use Illuminate\Http\Request;

class ContactMeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function list(Request $request)
    {
        $contactMeRecords = new ContactMe();

        if (! empty($request->searchQuery)) {
            $contactMeRecords->where('email', $request->query);
        }

        return ContactMeResource::collection(
            $contactMeRecords->paginate($request->perPage ?? 50)
        );
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
}
