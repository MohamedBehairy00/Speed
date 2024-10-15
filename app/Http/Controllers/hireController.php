<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Mail\SendMailHiring;
use Illuminate\Support\Facades\Mail;

class hireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.hire");
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
        $newApplication = new Employee();

        // Validate the form data
        $validatedData = $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'Phone' => 'required|string|max:15',
            'Address' => 'required|string|max:255',
            'cv' => 'required|max:2048|mimes:pdf|file',
            'Comments' => 'required|string|max:255',
            'job_name' => 'required|string|max:255',
        ]);

        // Handle file upload and save file path
        if ($request->hasFile('cv')) {
            $file_PDF = $request->file('cv');
            $file_name5 = $file_PDF->getClientOriginalName();
            $file_PDF->move(public_path('/upload/'), $file_name5);
            $cvPath = public_path('/upload/' . $file_name5);  // File path
            $newApplication->cv = $file_name5;
        } else {
            $cvPath = null;
            $newApplication->cv = null;
        }

        // Save the application details to the database
        $newApplication->Name = $request->Name;
        $newApplication->Email = $request->Email;
        $newApplication->Phone = $request->Phone;
        $newApplication->Address = $request->Address;
        $newApplication->jobName = $request->job_name;
        $newApplication->Comments = $request->Comments;
        $newApplication->save();

        // Send the email with the CV attached
        Mail::to(['speed@speed-advertising.com','mohammedbehairy0@gmail.com'])->send(new SendMailHiring($validatedData, $cvPath));

        return redirect()->back()->with("success", "Job application submitted successfully.");
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
        //
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
