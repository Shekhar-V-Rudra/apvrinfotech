@extends('backend.layouts.master')

@section('title', 'Portfolios')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-semibold text-gray-800">Portfolios</h1>
    <a href="{{ route('admin.portfolios.create') }}" class="inline-flex items-center px-4 py-2 rounded bg-indigo-600 text-white hover:bg-indigo-700">
        <i class="fas fa-plus mr-2"></i> Add Portfolio
    </a>
  </div>

<div class="bg-white rounded-lg shadow">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Active</th>
                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($portfolios as $item)
                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-700">{{ $item->id }}</td>
                        <td class="px-4 py-3 text-sm text-gray-900 font-medium">{{ $item->title }}</td>
                        <td class="px-4 py-3 text-sm text-gray-700">{{ ucwords(str_replace('-', ' ', $item->category)) }}</td>
                        <td class="px-4 py-3">
                            <img src="{{ $item->image }}" alt="img" class="h-10 w-16 object-cover rounded border" />
                        </td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center px-2 py-1 rounded text-xs {{ $item->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-700' }}">
                                {{ $item->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.portfolios.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('admin.portfolios.show', $item->id) }}" class="text-blue-600 hover:text-blue-800 mr-3"><i class="fas fa-eye"></i></a>
                            <form action="{{ route('admin.portfolios.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this item?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-6 text-center text-gray-500">No portfolio items found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="px-4 py-3 border-t bg-gray-50">{{ $portfolios->links() }}</div>
</div>
@endsection


