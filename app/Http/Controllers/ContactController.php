<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Repositories\ContactRepository;

class ContactController extends Controller
{

    private ContactRepository $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    //
    public function index()
    {
        $data = Contact::paginate(10);
        // $data = Contact();
        return $data;
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
    public function store(Request $request)
    {
        $data = $request->all();
        $this->contactRepository->store($data);
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact, Request $request)
    {
        $request = $request->all();
        if ($request['_with'] ?? false) {
            $contact->load(explode(',', $request['_with']));
        }
        return $contact;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $data = $request->all();
        $contact->fill($data);
        $contact->save();

        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        $response=[
            'success' => true,
            'data'    => 'success'
        ];
        if(!empty($message)){
            $response['message'] =$message;
        }
        return response()->json($response);
    }
}
