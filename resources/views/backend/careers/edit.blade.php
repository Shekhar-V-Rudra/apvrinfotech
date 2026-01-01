@extends('backend.layouts.master')

@section('title', 'Edit Career')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Page Title and Subtitle (Outside the card) -->
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Edit Career</h1>
        <p class="text-sm text-gray-600">Update the career opportunity details and job information.</p>
    </div>

    <!-- Form Card -->
    <form method="POST" action="{{ route('admin.careers.update', $career->id) }}" class="bg-white rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <!-- Section Header Inside Card -->
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-center gap-3 mb-2">
                <i class="fas fa-briefcase text-lg text-blue-500"></i>
                <h2 class="text-lg font-semibold text-gray-800">Career Information</h2>
            </div>
            <p class="text-sm text-gray-500 ml-8">Enter the career details and job information.</p>
        </div>

        <!-- Form Fields Section -->
        <div class="p-6 space-y-5">
            <!-- Job Title Field -->
            <div class="relative">
                <label class="absolute -top-2.5 left-3 px-1 text-sm font-medium {{ $errors->has('job_title') ? 'text-red-500' : 'text-gray-700' }} bg-white">
                    Job Title <span class="text-red-500">*</span>
                </label>
                <input 
                    name="job_title" 
                    value="{{ old('job_title', $career->job_title) }}" 
                    class="w-full px-4 py-3 border {{ $errors->has('job_title') ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} rounded-md focus:ring-2 transition bg-white" 
                    placeholder="Enter job title (e.g., Senior Web Developer, UI/UX Designer)"
                    required 
                />
                @error('job_title')
                    <div class="flex items-center mt-1.5">
                        <svg class="w-4 h-4 text-red-500 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <!-- Vacancy Field -->
            <div class="relative">
                <label class="absolute -top-2.5 left-3 px-1 text-sm font-medium {{ $errors->has('vacancy') ? 'text-red-500' : 'text-gray-700' }} bg-white">
                    Vacancy <span class="text-red-500">*</span>
                </label>
                <input 
                    type="number" 
                    name="vacancy" 
                    value="{{ old('vacancy', $career->vacancy) }}" 
                    min="1" 
                    class="w-full px-4 py-3 border {{ $errors->has('vacancy') ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} rounded-md focus:ring-2 transition bg-white" 
                    placeholder="Enter number of vacancies (e.g., 2, 5)"
                    required 
                />
                @error('vacancy')
                    <div class="flex items-center mt-1.5">
                        <svg class="w-4 h-4 text-red-500 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <!-- Job Type Field -->
            <div class="relative">
                <label class="absolute -top-2.5 left-3 px-1 text-sm font-medium {{ $errors->has('job_type') ? 'text-red-500' : 'text-gray-700' }} bg-white">
                    Job Type <span class="text-red-500">*</span>
                </label>
                <select 
                    name="job_type" 
                    class="w-full px-4 py-3 border {{ $errors->has('job_type') ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} rounded-md focus:ring-2 transition appearance-none bg-white" 
                    required
                >
                    <option value="">Select job type</option>
                    <option value="Full time" {{ old('job_type', $career->job_type)=='Full time'?'selected':'' }}>Full time</option>
                    <option value="Part time" {{ old('job_type', $career->job_type)=='Part time'?'selected':'' }}>Part time</option>
                    <option value="Contract" {{ old('job_type', $career->job_type)=='Contract'?'selected':'' }}>Contract</option>
                </select>
                @error('job_type')
                    <div class="flex items-center mt-1.5">
                        <svg class="w-4 h-4 text-red-500 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <!-- Experience Field -->
            <div class="relative">
                <label class="absolute -top-2.5 left-3 px-1 text-sm font-medium {{ $errors->has('experience') ? 'text-red-500' : 'text-gray-700' }} bg-white">
                    Experience <span class="text-gray-400 text-xs">(optional)</span>
                </label>
                <input 
                    name="experience" 
                    value="{{ old('experience', $career->experience) }}" 
                    class="w-full px-4 py-3 border {{ $errors->has('experience') ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} rounded-md focus:ring-2 transition bg-white" 
                    placeholder="Enter experience required (e.g., 0-2 Years, 3-5 Years)"
                />
                @error('experience')
                    <div class="flex items-center mt-1.5">
                        <svg class="w-4 h-4 text-red-500 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <!-- Location Field -->
            <div class="relative">
                <label class="absolute -top-2.5 left-3 px-1 text-sm font-medium {{ $errors->has('location') ? 'text-red-500' : 'text-gray-700' }} bg-white">
                    Location <span class="text-gray-400 text-xs">(optional)</span>
                </label>
                <input 
                    name="location" 
                    value="{{ old('location', $career->location) }}" 
                    class="w-full px-4 py-3 border {{ $errors->has('location') ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} rounded-md focus:ring-2 transition bg-white" 
                    placeholder="Enter job location (e.g., Surat, Remote, Hybrid)"
                />
                @error('location')
                    <div class="flex items-center mt-1.5">
                        <svg class="w-4 h-4 text-red-500 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <!-- Active Status -->
            <div class="relative pt-2">
                <label class="flex items-center cursor-pointer">
                    <input 
                        type="checkbox" 
                        name="is_active" 
                        value="1" 
                        class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500 cursor-pointer" 
                        {{ old('is_active', $career->is_active) ? 'checked' : '' }} 
                    />
                    <span class="ml-2 text-sm font-medium text-gray-700">Active Status</span>
                </label>
                <span class="status-badge-container ml-7">
                    @if(old('is_active', $career->is_active))
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-500 text-white">Active</span>
                    @else
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-400 text-white">Inactive</span>
                    @endif
                </span>
            </div>

            <!-- Sort Order Field -->
            <div class="relative">
                <label class="absolute -top-2.5 left-3 px-1 text-sm font-medium {{ $errors->has('sort_order') ? 'text-red-500' : 'text-gray-700' }} bg-white">
                    Sort Order <span class="text-gray-400 text-xs">(optional)</span>
                </label>
                <input 
                    type="number" 
                    name="sort_order" 
                    value="{{ old('sort_order', $career->sort_order) }}" 
                    min="0" 
                    class="w-full px-4 py-3 border {{ $errors->has('sort_order') ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} rounded-md focus:ring-2 transition bg-white" 
                    placeholder="Enter sort order (e.g., 0, 1, 2)"
                />
                @error('sort_order')
                    <div class="flex items-center mt-1.5">
                        <svg class="w-4 h-4 text-red-500 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    </div>
                @enderror
            </div>
        </div>

        <!-- Form Footer -->
        <div class="p-6 border-t border-gray-200 flex items-center justify-between bg-gray-50">
            <p class="text-xs text-gray-500">
                <span class="text-red-500">*</span> Indicates required fields
            </p>
            <div class="flex items-center gap-3">
                <a 
                    href="{{ route('admin.careers.index') }}" 
                    class="px-4 py-2 border border-white rounded-md text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition font-medium flex items-center"
                >
                    <i class="fas fa-times mr-2"></i>Cancel
                </a>
                <button 
                    type="submit" 
                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition font-medium flex items-center"
                >
                    <i class="fas fa-save mr-2"></i>Update Career
                </button>
            </div>
        </div>
    </form>
</div>

@push('styles')
<style>
    select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkbox = document.querySelector('input[name="is_active"]');
        const statusBadge = document.querySelector('.status-badge-container');
        
        if (checkbox && statusBadge) {
            function updateStatusBadge() {
                const isChecked = checkbox.checked;
                statusBadge.innerHTML = isChecked
                    ? '<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-500 text-white">Active</span>'
                    : '<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-400 text-white">Inactive</span>';
            }
            
            checkbox.addEventListener('change', updateStatusBadge);
            updateStatusBadge(); // Initial update
        }
    });
</script>
@endpush
@endsection
