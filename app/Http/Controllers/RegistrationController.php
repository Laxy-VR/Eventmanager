<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Event;
use App\Http\Controllers\Controller;
use App\Mail\RegMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $registrations = Registration::with('event')->get();

        return view('registrations.index', ['registrations' => $registrations]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Event $event)
    {
        return view('registrations.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $fields = $request->validate([
            'event_id' => ['required', 'exists:events,id'],
            'user_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
        ]);

        // Automatically set the registered_at field
        $fields['registered_at'] = now();

        // Create Registration
        Registration::create($fields);

        

        // Redirect to index
        return redirect()->route('events.index')->with('success', 'Registration successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
