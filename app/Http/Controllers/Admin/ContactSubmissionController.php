<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\View\View;

class ContactSubmissionController extends Controller
{
    public function index(): View
    {
        /** @var LengthAwarePaginator $submissions */
        $submissions = ContactSubmission::query()
            ->latest()
            ->paginate(20);

        return view('admin.contact_submissions.index', compact('submissions'));
    }
}
