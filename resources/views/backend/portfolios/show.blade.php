@extends('backend.layouts.master')

@section('title', 'Portfolio Details')

@section('content')
<div class="max-w-5xl">
    <div class="mb-4 sm:mb-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <h1 class="text-xl sm:text-2xl font-semibold text-gray-800">Portfolio Details</h1>
        <a href="{{ route('admin.portfolios.index') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 transition-colors">
            <i class="fas fa-arrow-left mr-2"></i> Back to List
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-4 sm:p-6">
            <!-- Image Section -->
            <div class="mb-6">
                @if($portfolio->image_url)
                    <div class="rounded-lg border border-gray-200 overflow-hidden bg-gray-50">
                        <img src="{{ $portfolio->image_url }}" alt="{{ $portfolio->title }}" class="w-full h-auto object-contain max-h-96 mx-auto" />
                    </div>
                @else
                    <div class="rounded-lg border border-gray-200 bg-gray-100 h-64 flex items-center justify-center">
                        <div class="text-center">
                            <i class="fas fa-image text-4xl text-gray-300 mb-2"></i>
                            <p class="text-gray-400">No image available</p>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Details Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-4">
                    <div>
                        <div class="text-xs sm:text-sm font-medium text-gray-500 uppercase tracking-wider mb-1">Title</div>
                        <div class="text-base sm:text-lg font-semibold text-gray-900">{{ $portfolio->title }}</div>
                    </div>

                    <div>
                        <div class="text-xs sm:text-sm font-medium text-gray-500 uppercase tracking-wider mb-1">Category</div>
                        <div>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                {{ ucfirst(str_replace('-', ' ', $portfolio->category)) }}
                            </span>
                        </div>
                    </div>

                    <div>
                        <div class="text-xs sm:text-sm font-medium text-gray-500 uppercase tracking-wider mb-1">Status</div>
                        <div>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $portfolio->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-700' }}">
                                {{ $portfolio->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </div>
                    </div>

                    @if($portfolio->sort_order !== null)
                    <div>
                        <div class="text-xs sm:text-sm font-medium text-gray-500 uppercase tracking-wider mb-1">Sort Order</div>
                        <div class="text-sm text-gray-900">{{ $portfolio->sort_order }}</div>
                    </div>
                    @endif
                </div>

                <div class="space-y-4">
                    @if($portfolio->short_details)
                    <div>
                        <div class="text-xs sm:text-sm font-medium text-gray-500 uppercase tracking-wider mb-1">Short Details</div>
                        <div class="text-sm sm:text-base text-gray-900">{{ $portfolio->short_details }}</div>
                    </div>
                    @endif

                    @if($portfolio->project_url)
                    <div>
                        <div class="text-xs sm:text-sm font-medium text-gray-500 uppercase tracking-wider mb-1">Project URL</div>
                        <div>
                            <a href="{{ $portfolio->project_url }}" class="text-sm sm:text-base text-indigo-600 hover:text-indigo-800 hover:underline break-all" target="_blank" rel="noopener noreferrer">
                                {{ $portfolio->project_url }}
                                <i class="fas fa-external-link-alt ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            @if($portfolio->description)
            <div class="mt-6 pt-6 border-t border-gray-200">
                <div class="text-xs sm:text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Description</div>
                <div class="text-sm sm:text-base text-gray-900 whitespace-pre-wrap">{{ $portfolio->description }}</div>
            </div>
            @endif
        </div>

        <!-- Actions Footer -->
        <div class="px-4 sm:px-6 py-4 bg-gray-50 border-t border-gray-200 flex flex-col sm:flex-row items-stretch sm:items-center justify-end gap-3">
            <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-colors text-sm sm:text-base">
                <i class="fas fa-edit mr-2"></i> Edit Portfolio
            </a>
            <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this portfolio item?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors text-sm sm:text-base">
                    <i class="fas fa-trash mr-2"></i> Delete Portfolio
                </button>
            </form>
        </div>
    </div>
</div>
@endsection


