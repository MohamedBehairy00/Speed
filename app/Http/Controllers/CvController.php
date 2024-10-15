<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage; // Correct import

class CvController extends Controller
{
    // Existing methods...

    /**
     * Handle downloading the CV.
     */
    public function downloadCv($id)
    {
               // Find the hiring record by ID
        $pdf = Employee::find($id);

        // Check if the record exists and has a pdf_file
        if (!$pdf || !$pdf->cv) {
            return redirect()->back()->with('error', 'PDF file not found.');
        }

        // Decode the file name to handle any special characters
        $fileName = urldecode($pdf->cv);

        // Build the path to the PDF file
        $pdf_path = public_path('upload/' . $fileName);

        // Check if the file exists
        if (!file_exists($pdf_path)) {
            return redirect()->back()->with('error', 'PDF file does not exist.');
        }
        // Return the file as a downloadable response
        return response()->download($pdf_path);
    }
}
