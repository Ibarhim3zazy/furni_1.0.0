<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Category;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactsData = contact::paginate(5);
        return view('dispaly-contacts', compact('contactsData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $catigory = new catigory();
        $categories = Category::all();
        return view('contact', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request) {
        $validatedData = $request->validated();
        // $validatedData = $request->validate([
        //     'first_name' => 'required|string',
        //     'last_name' => 'required|string',
        //     'email' => 'required|email',
        //     'message' => 'nullable|string',
        // ]);
        
        $contact = new Contact;
        $contact->create($validatedData);
        return back()->with('status', 'Your message has been sent successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return view('contact');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
