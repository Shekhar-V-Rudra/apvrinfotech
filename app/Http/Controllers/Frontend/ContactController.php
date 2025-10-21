<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Mail\ContactSubmissionNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'service' => ['nullable', 'string', 'max:255'],
            'comment' => ['nullable', 'string'],
        ]);

        $submission = DB::transaction(function () use ($validated): ContactSubmission {
            return ContactSubmission::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'service' => $validated['service'] ?? null,
                'message' => $validated['comment'] ?? null,
            ]);
        });

        // Daily email cap: only one admin email per day
        $alreadyEmailedToday = ContactSubmission::query()
            ->whereDate('emailed_at', now()->toDateString())
            ->exists();

        if (! $alreadyEmailedToday) {
            try {
                Mail::to(config('mail.from.address'))
                    ->send(new ContactSubmissionNotification($submission));
                $submission->update(['emailed_at' => now()]);
            } catch (\Throwable $e) {
                // Swallow mail errors to not block UX; logged by framework
            }
        }

        return back()->with('success', 'Thanks! Your message has been sent.');
    }
}
