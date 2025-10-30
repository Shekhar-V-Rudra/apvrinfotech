@extends('backend.layouts.master')

@section('title', 'Add Portfolio')

@section('content')
<div class="max-w-3xl">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Add Portfolio</h1>

    <form method="POST" action="{{ route('admin.portfolios.store') }}" class="bg-white rounded-lg shadow p-6 space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
            <input name="title" value="{{ old('title') }}" class="w-full rounded border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" required />
            @error('title')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
            <select name="category" class="w-full rounded border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" required>
                <option value="">Select category</option>
                <option value="website" {{ old('category')=='website'?'selected':'' }}>Website</option>
                <option value="mobile-app" {{ old('category')=='mobile-app'?'selected':'' }}>Mobile App</option>
                <option value="graphic-design" {{ old('category')=='graphic-design'?'selected':'' }}>Graphic Design</option>
            </select>
            @error('category')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Image URL or Path</label>
            <input name="image" value="{{ old('image') }}" class="w-full rounded border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" placeholder="assets/portfolio01.png" required />
            @error('image')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Project URL (optional)</label>
            <input name="project_url" value="{{ old('project_url') }}" class="w-full rounded border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" placeholder="https://example.com" />
            @error('project_url')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea name="description" rows="4" class="w-full rounded border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">{{ old('description') }}</textarea>
            @error('description')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="flex items-center gap-4">
            <label class="inline-flex items-center">
                <input type="checkbox" name="is_active" value="1" class="rounded border-gray-300 text-indigo-600" {{ old('is_active', true) ? 'checked' : '' }} />
                <span class="ml-2 text-sm text-gray-700">Active</span>
            </label>
            <div class="flex-1"></div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Sort Order</label>
                <input type="number" name="sort_order" value="{{ old('sort_order', 0) }}" class="w-32 rounded border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" min="0" />
            </div>
        </div>

        <div class="flex items-center gap-3 pt-2">
            <button class="inline-flex items-center px-4 py-2 rounded bg-indigo-600 text-white hover:bg-indigo-700">Save</button>
            <a href="{{ route('admin.portfolios.index') }}" class="text-gray-600 hover:text-gray-900">Cancel</a>
        </div>
    </form>
</div>
@endsection


