@extends('backend.layouts.master')

@section('title', 'Portfolios')

@section('content')
<!-- Header Section -->
<div class="mb-6">
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-4">
        <div>
            <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-1">
                <i class="fas fa-briefcase text-indigo-600 mr-2"></i>Portfolios
            </h1>
            <p class="text-sm text-gray-600">Manage your portfolio items and showcase your work</p>
        </div>
        <a href="{{ route('admin.portfolios.create') }}" class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all shadow-sm hover:shadow-md text-sm sm:text-base font-medium">
            <i class="fas fa-plus mr-2"></i> Add New Portfolio
        </a>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-5 border border-blue-200 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold text-blue-700 mb-1 uppercase tracking-wide">Total Portfolios</p>
                    <p class="text-3xl font-bold text-blue-900">{{ $stats['total'] ?? 0 }}</p>
                </div>
                <div class="bg-blue-500 rounded-full p-4 shadow-md">
                    <i class="fas fa-briefcase text-white text-xl"></i>
                </div>
            </div>
        </div>
        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-5 border border-green-200 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold text-green-700 mb-1 uppercase tracking-wide">Active</p>
                    <p class="text-3xl font-bold text-green-900">{{ $stats['active'] ?? 0 }}</p>
                </div>
                <div class="bg-green-500 rounded-full p-4 shadow-md">
                    <i class="fas fa-check-circle text-white text-xl"></i>
                </div>
            </div>
        </div>
        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-5 border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold text-gray-700 mb-1 uppercase tracking-wide">Hidden</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $stats['hidden'] ?? 0 }}</p>
                </div>
                <div class="bg-gray-500 rounded-full p-4 shadow-md">
                    <i class="fas fa-eye-slash text-white text-xl"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Desktop Table View (hidden on mobile) -->
<div class="hidden lg:block bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        <i class="fas fa-hashtag text-gray-400 mr-1"></i>ID
                    </th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        <i class="fas fa-heading text-gray-400 mr-1"></i>Title
                    </th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        <i class="fas fa-folder text-gray-400 mr-1"></i>Category
                    </th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        <i class="fas fa-info-circle text-gray-400 mr-1"></i>Details
                    </th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        <i class="fas fa-image text-gray-400 mr-1"></i>Image
                    </th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        <i class="fas fa-toggle-on text-gray-400 mr-1"></i>Status
                    </th>
                    <th class="px-6 py-4 text-right text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        <i class="fas fa-cog text-gray-400 mr-1"></i>Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($portfolios as $item)
                    <tr class="hover:bg-indigo-50/50 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium text-gray-600">#{{ $item->id }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-semibold text-gray-900 group-hover:text-indigo-600 transition-colors">
                                {{ $item->title }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-800 border border-blue-200">
                                <i class="fas fa-tag mr-1.5 text-xs"></i>{{ ucfirst(str_replace('-', ' ', $item->category)) }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600 max-w-xs truncate" title="{{ $item->short_details }}">
                                {{ $item->short_details ?: '—' }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($item->image_url)
                                <div class="relative group/image">
                                    <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="h-14 w-24 object-cover rounded-lg border-2 border-gray-200 shadow-sm group-hover/image:shadow-md transition-shadow" />
                                    <a href="{{ $item->image_url }}" target="_blank" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover/image:bg-opacity-40 rounded-lg transition-all opacity-0 group-hover/image:opacity-100">
                                        <i class="fas fa-expand text-white text-sm"></i>
                                    </a>
                                </div>
                            @else
                                <div class="h-14 w-24 bg-gray-100 rounded-lg border-2 border-dashed border-gray-300 flex items-center justify-center">
                                    <i class="fas fa-image text-gray-300 text-xs"></i>
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold {{ $item->is_active ? 'bg-green-100 text-green-800 border border-green-200' : 'bg-gray-100 text-gray-700 border border-gray-200' }}">
                                <i class="fas {{ $item->is_active ? 'fa-check-circle' : 'fa-times-circle' }} mr-1.5"></i>{{ $item->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex items-center justify-end gap-1">
                                <a href="{{ route('admin.portfolios.show', $item->id) }}" class="inline-flex items-center px-3 py-1.5 text-blue-600 hover:text-blue-800 hover:bg-blue-50 rounded-md transition-colors border border-transparent hover:border-blue-200" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.portfolios.edit', $item->id) }}" class="inline-flex items-center px-3 py-1.5 text-indigo-600 hover:text-indigo-800 hover:bg-indigo-50 rounded-md transition-colors border border-transparent hover:border-indigo-200" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.portfolios.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this portfolio item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-3 py-1.5 text-red-600 hover:text-red-800 hover:bg-red-50 rounded-md transition-colors border border-transparent hover:border-red-200" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center">
                                <div class="bg-gray-100 rounded-full p-6 mb-4">
                                    <i class="fas fa-inbox text-5xl text-gray-400"></i>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">No portfolio items found</h3>
                                <p class="text-sm text-gray-500 mb-4">Get started by creating your first portfolio item.</p>
                                <a href="{{ route('admin.portfolios.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                                    <i class="fas fa-plus mr-2"></i> Add Portfolio
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($portfolios->hasPages())
        <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
            {{ $portfolios->links() }}
        </div>
    @endif
</div>

<!-- Mobile/Tablet Card View (visible on small/medium screens) -->
<div class="lg:hidden space-y-4">
    @forelse($portfolios as $item)
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
            <div class="p-5">
                <!-- Header -->
                <div class="flex items-start justify-between mb-4">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs font-semibold text-gray-500 bg-gray-100 px-2 py-1 rounded">#{{ $item->id }}</span>
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-800 border border-blue-200">
                                <i class="fas fa-tag mr-1 text-xs"></i>{{ ucfirst(str_replace('-', ' ', $item->category)) }}
                            </span>
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold {{ $item->is_active ? 'bg-green-100 text-green-800 border border-green-200' : 'bg-gray-100 text-gray-700 border border-gray-200' }}">
                                <i class="fas {{ $item->is_active ? 'fa-check-circle' : 'fa-times-circle' }} mr-1 text-xs"></i>{{ $item->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $item->title }}</h3>
                    </div>
                </div>

                <!-- Image -->
                <div class="mb-4">
                    @if($item->image_url)
                        <div class="relative rounded-lg overflow-hidden border-2 border-gray-200">
                            <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full h-48 object-cover" />
                            <a href="{{ $item->image_url }}" target="_blank" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 hover:bg-opacity-40 transition-all">
                                <i class="fas fa-expand text-white opacity-0 hover:opacity-100 transition-opacity"></i>
                            </a>
                        </div>
                    @else
                        <div class="w-full h-48 bg-gray-100 rounded-lg border-2 border-dashed border-gray-300 flex items-center justify-center">
                            <div class="text-center">
                                <i class="fas fa-image text-4xl text-gray-300 mb-2"></i>
                                <p class="text-xs text-gray-400">No image</p>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Short Details -->
                @if($item->short_details)
                    <div class="mb-4 p-3 bg-gray-50 rounded-lg border border-gray-200">
                        <p class="text-sm text-gray-700">{{ $item->short_details }}</p>
                    </div>
                @endif

                <!-- Actions -->
                <div class="flex items-center justify-between gap-2 pt-4 border-t border-gray-200">
                    <a href="{{ route('admin.portfolios.show', $item->id) }}" class="flex-1 inline-flex items-center justify-center px-4 py-2.5 text-sm font-medium text-blue-700 bg-blue-50 border border-blue-200 rounded-lg hover:bg-blue-100 hover:border-blue-300 transition-colors">
                        <i class="fas fa-eye mr-2"></i> View
                    </a>
                    <a href="{{ route('admin.portfolios.edit', $item->id) }}" class="flex-1 inline-flex items-center justify-center px-4 py-2.5 text-sm font-medium text-indigo-700 bg-indigo-50 border border-indigo-200 rounded-lg hover:bg-indigo-100 hover:border-indigo-300 transition-colors">
                        <i class="fas fa-edit mr-2"></i> Edit
                    </a>
                    <form action="{{ route('admin.portfolios.destroy', $item->id) }}" method="POST" class="flex-1 inline" onsubmit="return confirm('Are you sure you want to delete this portfolio item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2.5 text-sm font-medium text-red-700 bg-red-50 border border-red-200 rounded-lg hover:bg-red-100 hover:border-red-300 transition-colors">
                            <i class="fas fa-trash mr-2"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8 text-center">
            <div class="bg-gray-100 rounded-full p-6 w-24 h-24 mx-auto mb-4 flex items-center justify-center">
                <i class="fas fa-inbox text-4xl text-gray-400"></i>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">No portfolio items found</h3>
            <p class="text-sm text-gray-500 mb-6">Get started by creating your first portfolio item.</p>
            <a href="{{ route('admin.portfolios.create') }}" class="inline-flex items-center px-5 py-2.5 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors font-medium">
                <i class="fas fa-plus mr-2"></i> Add Portfolio
            </a>
        </div>
    @endforelse

    @if($portfolios->hasPages())
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
            {{ $portfolios->links() }}
        </div>
    @endif
</div>
@endsection


