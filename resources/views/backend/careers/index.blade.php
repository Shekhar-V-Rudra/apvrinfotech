@extends('backend.layouts.master')

@section('title', 'Careers')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-semibold text-gray-800">Careers</h1>
    <a href="{{ route('admin.careers.create') }}" class="inline-flex items-center px-4 py-2 rounded bg-indigo-600 text-white hover:bg-indigo-700">
        <i class="fas fa-plus mr-2"></i> Add Career
    </a>
  </div>

<div class="bg-white rounded-lg shadow">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Job Title</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vacancy</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Experience</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Job Type</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Active</th>
                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($careers as $career)
                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-700">{{ $career->id }}</td>
                        <td class="px-4 py-3 text-sm text-gray-900 font-medium">{{ $career->job_title }}</td>
                        <td class="px-4 py-3 text-sm text-gray-700">{{ $career->vacancy }}</td>
                        <td class="px-4 py-3 text-sm text-gray-700">{{ $career->experience ?: '—' }}</td>
                        <td class="px-4 py-3 text-sm text-gray-700">{{ $career->location ?: '—' }}</td>
                        <td class="px-4 py-3 text-sm text-gray-700">{{ $career->job_type }}</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center px-2 py-1 rounded text-xs {{ $career->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-700' }}">
                                {{ $career->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.careers.edit', $career->id) }}" class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('admin.careers.show', $career->id) }}" class="text-blue-600 hover:text-blue-800 mr-3"><i class="fas fa-eye"></i></a>
                            <form action="{{ route('admin.careers.destroy', $career->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this career?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="px-4 py-6 text-center text-gray-500">No careers found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="px-4 py-3 border-t bg-gray-50">{{ $careers->links() }}</div>
</div>
@endsection



