<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactUsController extends Controller
{
    public function index()
    {
        return view("pages.contactus");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'phone' => 'required|max:16',
            'company' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:255',
        ]);

        // Insert into the database
        Client::create($data);

        // Send the email
        Mail::to(['speed@speed-advertising.com','mohammedbehairy0@gmail.com'])->send(new SendMail($data));

        return redirect()->back()->with('success', 'Client information submitted successfully.');
    }
}
