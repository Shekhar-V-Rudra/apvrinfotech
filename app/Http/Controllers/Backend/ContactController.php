<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the contacts.
     */
    public function index(Request $request)
    {
        $query = Contact::latest();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('service', 'like', "%{$search}%")
                  ->orWhere('others_service', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $contacts = $query->paginate(10);

        return view('backend.contacts.index', compact('contacts'));
    }

    /**
     * Display the specified contact.
     */
    public function show(Contact $contact)
    {
        return view('backend.contacts.show', compact('contact'));
    }

    /**
     * View the file attachment for a contact.
     */
    public function viewFile(Contact $contact)
    {
        // Check if contact has a file attachment
        if (!$contact->file_path) {
            abort(404, 'No file attachment found for this contact.');
        }

        // Check if file exists
        $filePath = storage_path('app/public/' . $contact->file_path);
        
        if (!file_exists($filePath)) {
            abort(404, 'File not found.');
        }

        // Get file MIME type
        $mimeType = mime_content_type($filePath);
        
        // Return the file response
        return response()->file($filePath, [
            'Content-Type' => $mimeType ?: 'application/octet-stream',
            'Content-Disposition' => 'inline; filename="' . basename($contact->file_path) . '"',
        ]);
    }

    /**
     * Download the file attachment for a contact.
     */
    public function downloadFile(Contact $contact)
    {
        // Check if contact has a file attachment
        if (!$contact->file_path) {
            abort(404, 'No file attachment found for this contact.');
        }

        // Check if file exists
        $filePath = storage_path('app/public/' . $contact->file_path);
        
        if (!file_exists($filePath)) {
            abort(404, 'File not found.');
        }

        // Return the file as a download
        return response()->download($filePath, basename($contact->file_path));
    }

    /**
     * Remove the specified contact from storage.
     */
    public function destroy(Contact $contact)
    {
        // Delete the associated file if it exists
        if ($contact->file_path && Storage::disk('public')->exists($contact->file_path)) {
            Storage::disk('public')->delete($contact->file_path);
        }

        $contact->delete();

        return redirect()->route('admin.contacts.index')
                        ->with('success', 'Contact deleted successfully.');
    }
}

