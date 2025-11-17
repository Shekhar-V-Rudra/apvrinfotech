@extends('backend.layouts.master')

@section('title', 'Career Details')

@section('content')
<div class="max-w-4xl">
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-semibold text-gray-800">Career Details</h1>
        <a href="{{ route('admin.careers.index') }}" class="text-indigo-600 hover:text-indigo-800">&larr; Back</a>
    </div>

    <div class="bg-white rounded-lg shadow p-6 space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <div class="text-sm text-gray-500">Job Title</div>
                <div class="text-lg font-medium text-gray-900">{{ $career->job_title }}</div>
            </div>
            <div>
                <div class="text-sm text-gray-500">Vacancy</div>
                <div class="text-gray-900">{{ $career->vacancy }}</div>
            </div>
            <div>
                <div class="text-sm text-gray-500">Experience</div>
                <div class="text-gray-900">{{ $career->experience ?: '—' }}</div>
            </div>
            <div>
                <div class="text-sm text-gray-500">Location</div>
                <div class="text-gray-900">{{ $career->location ?: '—' }}</div>
            </div>
            <div>
                <div class="text-sm text-gray-500">Job Type</div>
                <div class="text-gray-900">{{ $career->job_type }}</div>
            </div>
            <div>
                <div class="text-sm text-gray-500">Status</div>
                <div>
                    <span class="inline-flex items-center px-2 py-1 rounded text-xs {{ $career->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-700' }}">
                        {{ $career->is_active ? 'Active' : 'Hidden' }}
                    </span>
                </div>
            </div>
            <div>
                <div class="text-sm text-gray-500">Sort Order</div>
                <div class="text-gray-900">{{ $career->sort_order }}</div>
            </div>
            <div>
                <div class="text-sm text-gray-500">Created At</div>
                <div class="text-gray-900">{{ $career->created_at->format('M d, Y H:i') }}</div>
            </div>
        </div>
    </div>
</div>
@endsection



