@extends('backend.layouts.master')

@section('title', 'Edit Portfolio')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Page Title and Subtitle (Outside the card) -->
    <div class="mb-4 sm:mb-6">
        <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-2">Edit Portfolio</h1>
        <p class="text-xs sm:text-sm text-gray-600">Update the portfolio item details and project information.</p>
    </div>

    <!-- Form Card -->
    <form method="POST" action="{{ route('admin.portfolios.update', $portfolio->id) }}" enctype="multipart/form-data" class="bg-white rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <!-- Section Header Inside Card -->
        <div class="p-4 sm:p-6 border-b border-gray-200">
            <div class="flex items-center gap-3 mb-2">
                <i class="fas fa-gem text-lg text-blue-500"></i>
                <h2 class="text-lg font-semibold text-gray-800">Portfolio Information</h2>
            </div>
            <p class="text-sm text-gray-500 ml-8">Enter the portfolio details and hierarchy information.</p>
        </div>

        <!-- Form Fields Section -->
        <div class="p-4 sm:p-6 space-y-5">
            <!-- Title Field -->
            <div class="relative">
                <label class="absolute -top-2.5 left-3 px-1 text-sm font-medium {{ $errors->has('title') ? 'text-red-500' : 'text-gray-700' }} bg-white">
                    Portfolio Title <span class="text-red-500">*</span>
                </label>
                <input 
                    name="title" 
                    value="{{ old('title', $portfolio->title) }}" 
                    class="w-full px-4 py-3 border {{ $errors->has('title') ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} rounded-md focus:ring-2 transition bg-white" 
                    placeholder="Enter portfolio title (e.g., E-Commerce Website, Mobile Banking App)"
                    required 
                />
                @error('title')
                    <div class="flex items-center mt-1.5">
                        <svg class="w-4 h-4 text-red-500 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <!-- Category Field -->
            <div class="relative">
                <label class="absolute -top-2.5 left-3 px-1 text-sm font-medium {{ $errors->has('category') ? 'text-red-500' : 'text-gray-700' }} bg-white">
                    Category <span class="text-red-500">*</span>
                </label>
                <select 
                    name="category" 
                    class="w-full px-4 py-3 border {{ $errors->has('category') ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} rounded-md focus:ring-2 transition appearance-none bg-white" 
                    required
                >
                    <option value="">Select category</option>
                    <option value="website" {{ old('category', $portfolio->category)=='website'?'selected':'' }}>Website</option>
                    <option value="mobile-app" {{ old('category', $portfolio->category)=='mobile-app'?'selected':'' }}>Mobile App</option>
                    <option value="graphic-design" {{ old('category', $portfolio->category)=='graphic-design'?'selected':'' }}>Graphic Design</option>
                </select>
                @error('category')
                    <div class="flex items-center mt-1.5">
                        <svg class="w-4 h-4 text-red-500 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <!-- Image Field -->
            <div class="relative">
                <label class="absolute -top-2.5 left-3 px-1 text-sm font-medium {{ $errors->has('image') ? 'text-red-500' : 'text-gray-700' }} bg-white z-10">
                    Portfolio Image <span class="text-gray-400 text-xs">(optional)</span>
                </label>
                
                <!-- Current Image Display -->
                @if($portfolio->image_url)
                    <div class="mb-4">
                        <p class="text-sm font-medium text-gray-700 mb-2">Current Image:</p>
                        <div class="relative inline-block border-2 border-gray-200 rounded-lg p-2 bg-white">
                            <img src="{{ $portfolio->image_url }}" alt="{{ $portfolio->title }}" class="max-w-full h-auto max-h-64 rounded-lg object-contain" />
                        </div>
                    </div>
                @endif

                <!-- File Upload Area -->
                <div class="mt-2">
                    <div id="file-upload-area" class="relative border-2 border-dashed {{ $errors->has('image') ? 'border-red-500 bg-red-50' : 'border-gray-300 bg-gray-50 hover:border-blue-400 hover:bg-blue-50' }} rounded-lg p-6 transition-colors cursor-pointer">
                        <input 
                            type="file"
                            name="image" 
                            id="image-input"
                            accept="image/*"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                        />
                        <div class="text-center">
                            <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-2"></i>
                            <p class="text-sm font-medium text-gray-700 mb-1">
                                <span class="text-blue-600">Click to upload</span> or drag and drop
                            </p>
                            <p class="text-xs text-gray-500">PNG, JPG, JPEG, GIF, WebP (Max: 5MB)</p>
                            <p class="text-xs text-blue-600 mt-1">Leave empty to keep current image</p>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 mt-2">Recommended: 1200x800px or similar aspect ratio</p>
                </div>
                
                @error('image')
                    <div class="flex items-center mt-2">
                        <svg class="w-4 h-4 text-red-500 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    </div>
                @enderror
                
                <!-- Image Preview for new upload -->
                <div id="image-preview" class="mt-4 hidden">
                    <p class="text-sm font-medium text-gray-700 mb-2">New Image Preview:</p>
                    <div class="relative inline-block border-2 border-gray-200 rounded-lg p-2 bg-white">
                        <img id="preview-img" src="" alt="Preview" class="max-w-full h-auto max-h-80 rounded-lg object-contain" />
                        <button type="button" id="remove-preview" class="absolute top-0 right-0 m-2 bg-red-500 text-white rounded-full p-1.5 hover:bg-red-600 transition-colors">
                            <i class="fas fa-times text-xs"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Short Details Field -->
            <div class="relative">
                <label class="absolute -top-2.5 left-3 px-1 text-sm font-medium {{ $errors->has('short_details') ? 'text-red-500' : 'text-gray-700' }} bg-white">
                    Short Details <span class="text-gray-400 text-xs">(optional)</span>
                </label>
                <input 
                    name="short_details" 
                    value="{{ old('short_details', $portfolio->short_details) }}" 
                    class="w-full px-4 py-3 border {{ $errors->has('short_details') ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} rounded-md focus:ring-2 transition bg-white" 
                    placeholder="Enter short details (e.g., React, Laravel, Figma, UI/UX Design)"
                />
                @error('short_details')
                    <div class="flex items-center mt-1.5">
                        <svg class="w-4 h-4 text-red-500 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <!-- Project URL Field -->
            <div class="relative">
                <label class="absolute -top-2.5 left-3 px-1 text-sm font-medium {{ $errors->has('project_url') ? 'text-red-500' : 'text-gray-700' }} bg-white">
                    Project URL <span class="text-gray-400 text-xs">(optional)</span>
                </label>
                <input 
                    type="url"
                    name="project_url" 
                    value="{{ old('project_url', $portfolio->project_url) }}" 
                    class="w-full px-4 py-3 border {{ $errors->has('project_url') ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} rounded-md focus:ring-2 transition bg-white" 
                    placeholder="https://example.com"
                />
                @error('project_url')
                    <div class="flex items-center mt-1.5">
                        <svg class="w-4 h-4 text-red-500 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <!-- Description Field -->
            <div class="relative">
                <label class="absolute -top-2.5 left-3 px-1 text-sm font-medium {{ $errors->has('description') ? 'text-red-500' : 'text-gray-700' }} bg-white">
                    Description <span class="text-gray-400 text-xs">(optional)</span>
                </label>
                <textarea 
                    name="description" 
                    rows="5" 
                    class="w-full px-4 py-3 border {{ $errors->has('description') ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} rounded-md focus:ring-2 transition resize-y bg-white"
                    placeholder="Enter a detailed description of this portfolio project..."
                >{{ old('description', $portfolio->description) }}</textarea>
                @error('description')
                    <div class="flex items-center mt-1.5">
                        <svg class="w-4 h-4 text-red-500 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <!-- Sort Order Field -->
            <div class="relative">
                <label class="absolute -top-2.5 left-3 px-1 text-sm font-medium {{ $errors->has('sort_order') ? 'text-red-500' : 'text-gray-700' }} bg-white">
                    Sort Order <span class="text-gray-400 text-xs">(optional)</span>
                </label>
                <input 
                    type="number"
                    name="sort_order" 
                    value="{{ old('sort_order', $portfolio->sort_order ?? 0) }}" 
                    min="0"
                    class="w-full px-4 py-3 border {{ $errors->has('sort_order') ? 'border-red-500 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} rounded-md focus:ring-2 transition bg-white" 
                    placeholder="0"
                />
                <p class="text-xs text-gray-500 mt-1">Lower numbers appear first. Default: 0</p>
                @error('sort_order')
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
                        {{ old('is_active', $portfolio->is_active) ? 'checked' : '' }} 
                    />
                    <span class="ml-2 text-sm font-medium text-gray-700">Active Status</span>
                </label>
                <span class="status-badge-container ml-7">
                    @if(old('is_active', $portfolio->is_active))
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-500 text-white">Active</span>
                    @else
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-400 text-white">Inactive</span>
                    @endif
                </span>
            </div>
        </div>

        <!-- Form Footer -->
        <div class="p-4 sm:p-6 border-t border-gray-200 flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4 bg-gray-50">
            <p class="text-xs text-gray-500 order-2 sm:order-1">
                <span class="text-red-500">*</span> Indicates required fields
            </p>
            <div class="flex items-center gap-3 order-1 sm:order-2">
                <a 
                    href="{{ route('admin.portfolios.index') }}" 
                    class="flex-1 sm:flex-initial px-4 py-2 border border-white rounded-md text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition font-medium flex items-center justify-center"
                >
                    <i class="fas fa-times mr-2"></i>Cancel
                </a>
                <button 
                    type="submit" 
                    class="flex-1 sm:flex-initial px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition font-medium flex items-center justify-center"
                >
                    <i class="fas fa-save mr-2"></i>Update Portfolio
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

        // Image preview functionality with drag and drop
        const imageInput = document.getElementById('image-input');
        const imagePreview = document.getElementById('image-preview');
        const previewImg = document.getElementById('preview-img');
        const fileUploadArea = document.getElementById('file-upload-area');
        const removePreview = document.getElementById('remove-preview');

        function handleFilePreview(file) {
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                    if (fileUploadArea) fileUploadArea.classList.add('hidden');
                };
                reader.readAsDataURL(file);
            }
        }

        if (imageInput && imagePreview && previewImg && fileUploadArea) {
            // File input change
            imageInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                handleFilePreview(file);
            });

            // Drag and drop functionality
            fileUploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                fileUploadArea.classList.add('border-blue-500', 'bg-blue-100');
            });

            fileUploadArea.addEventListener('dragleave', function(e) {
                e.preventDefault();
                fileUploadArea.classList.remove('border-blue-500', 'bg-blue-100');
            });

            fileUploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                fileUploadArea.classList.remove('border-blue-500', 'bg-blue-100');
                const file = e.dataTransfer.files[0];
                if (file) {
                    imageInput.files = e.dataTransfer.files;
                    handleFilePreview(file);
                }
            });

            // Remove preview
            if (removePreview) {
                removePreview.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    imageInput.value = '';
                    imagePreview.classList.add('hidden');
                    fileUploadArea.classList.remove('hidden');
                });
            }
        }
    });
</script>
@endpush
@endsection


