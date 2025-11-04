<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Mail\ContactThankYouEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function show()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc|max:255',
            'service' => 'required|string|max:255',
            'others_service' => 'required_if:service,others|string|max:255',
            'comment' => 'required|string',
            'attachment' => 'nullable|file|max:10240', // Optional, all file types allowed, max 10MB
        ], [
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.rfc' => 'Please enter a valid email address format.',
            'service.required' => 'Please select a service.',
            'others_service.required_if' => 'Please specify your service.',
            'others_service.string' => 'Service specification must be valid text.',
            'comment.required' => 'Please enter your message.',
            'attachment.file' => 'The attachment must be a valid file.',
            'attachment.max' => 'The attachment may not be greater than 10MB.',
        ]);

        if ($validator->fails()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors(),
                    'message' => 'Please correct the errors below.'
                ], 422);
            }
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $filePath = null;

        // Handle file upload if provided
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            
            // Generate unique filename to prevent overwrites
            $filename = time() . '_' . uniqid() . '_' . $file->getClientOriginalName();
            
            // Store file in public storage under contacts directory
            $filePath = $file->storeAs('contacts', $filename, 'public');
        }

        // Store service and others_service separately
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'service' => $request->service,
            'others_service' => $request->service === 'others' ? $request->others_service : null,
            'message' => $request->comment,
            'file_path' => $filePath,
        ]);

        // Send thank you email
        try {
            Mail::to($request->email)->send(new ContactThankYouEmail($contact));
        } catch (\Exception $e) {
            // Log error but don't fail the submission
            \Log::error('Failed to send contact email: ' . $e->getMessage());
        }

        $successMessage = 'Thank you for contacting us! We have received your message and will get back to you soon.';

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage
            ]);
        }

        return back()->with('success', $successMessage);
    }
}

