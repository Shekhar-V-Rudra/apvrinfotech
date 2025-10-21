@extends('frontend.layouts.master')

@section('title', 'Contact Submissions')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Contact Submissions</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Service</th>
                    <th>Message</th>
                    <th>Submitted</th>
                    <th>Emailed At</th>
                </tr>
            </thead>
            <tbody>
                @forelse($submissions as $submission)
                <tr>
                    <td>{{ $submission->id }}</td>
                    <td>{{ $submission->name }}</td>
                    <td>{{ $submission->email }}</td>
                    <td>{{ $submission->service }}</td>
                    <td style="max-width: 400px; white-space: pre-wrap;">{{ $submission->message }}</td>
                    <td>{{ $submission->created_at->format('Y-m-d H:i') }}</td>
                    <td>{{ $submission->emailed_at?->format('Y-m-d H:i') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">No submissions yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $submissions->links() }}
</div>
@endsection
