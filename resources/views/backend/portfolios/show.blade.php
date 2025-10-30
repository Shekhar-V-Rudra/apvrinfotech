@extends('backend.layouts.master')

@section('title', 'Portfolio Details')

@section('content')
<div class="max-w-4xl">
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-semibold text-gray-800">Portfolio Details</h1>
        <a href="{{ route('admin.portfolios.index') }}" class="text-indigo-600 hover:text-indigo-800">&larr; Back</a>
    </div>

    <div class="bg-white rounded-lg shadow p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="md:col-span-1">
            <img src="{{ $portfolio->image }}" alt="image" class="w-full rounded border" />
        </div>
        <div class="md:col-span-2 space-y-3">
            <div>
                <div class="text-sm text-gray-500">Title</div>
                <div class="text-lg font-medium text-gray-900">{{ $portfolio->title }}</div>
            </div>
            <div>
                <div class="text-sm text-gray-500">Category</div>
                <div class="text-gray-900">{{ ucwords(str_replace('-', ' ', $portfolio->category)) }}</div>
            </div>
            <div>
                <div class="text-sm text-gray-500">Project URL</div>
                <div>
                    @if($portfolio->project_url)
                        <a href="{{ $portfolio->project_url }}" class="text-indigo-600 hover:underline" target="_blank">{{ $portfolio->project_url }}</a>
                    @else
                        <span class="text-gray-500">N/A</span>
                    @endif
                </div>
            </div>
            <div>
                <div class="text-sm text-gray-500">Description</div>
                <div class="text-gray-900">{{ $portfolio->description ?: '—' }}</div>
            </div>
        </div>
    </div>
</div>
@endsection


