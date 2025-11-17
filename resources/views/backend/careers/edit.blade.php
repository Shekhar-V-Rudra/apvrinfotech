@extends('backend.layouts.master')

@section('title', 'Edit Career')

@section('content')
<div class="max-w-3xl">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Edit Career</h1>

    <form method="POST" action="{{ route('admin.careers.update', $career->id) }}" class="bg-white rounded-lg shadow p-6 space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Job Title</label>
            <input name="job_title" value="{{ old('job_title', $career->job_title) }}" class="w-full rounded border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" required />
            @error('job_title')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Vacancy</label>
                <input type="number" name="vacancy" value="{{ old('vacancy', $career->vacancy) }}" min="1" class="w-full rounded border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" required />
                @error('vacancy')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Job Type</label>
                <select name="job_type" class="w-full rounded border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" required>
                    <option value="Full time" {{ old('job_type', $career->job_type)=='Full time'?'selected':'' }}>Full time</option>
                    <option value="Part time" {{ old('job_type', $career->job_type)=='Part time'?'selected':'' }}>Part time</option>
                    <option value="Contract" {{ old('job_type', $career->job_type)=='Contract'?'selected':'' }}>Contract</option>
                </select>
                @error('job_type')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Experience</label>
                <input name="experience" value="{{ old('experience', $career->experience) }}" class="w-full rounded border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" placeholder="e.g., 0-2 Years" />
                @error('experience')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Location</label>
                <input name="location" value="{{ old('location', $career->location) }}" class="w-full rounded border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" placeholder="e.g., Surat" />
                @error('location')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="flex items-center gap-4">
            <label class="inline-flex items-center">
                <input type="checkbox" name="is_active" value="1" class="rounded border-gray-300 text-indigo-600" {{ old('is_active', $career->is_active) ? 'checked' : '' }} />
                <span class="ml-2 text-sm text-gray-700">Active</span>
            </label>
            <div class="flex-1"></div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Sort Order</label>
                <input type="number" name="sort_order" value="{{ old('sort_order', $career->sort_order) }}" class="w-32 rounded border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" min="0" />
            </div>
        </div>

        <div class="flex items-center gap-3 pt-2">
            <button class="inline-flex items-center px-4 py-2 rounded bg-indigo-600 text-white hover:bg-indigo-700">Update</button>
            <a href="{{ route('admin.careers.index') }}" class="text-gray-600 hover:text-gray-900">Cancel</a>
        </div>
    </form>
</div>
@endsection


