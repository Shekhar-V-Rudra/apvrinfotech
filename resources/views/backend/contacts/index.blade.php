@extends('backend.layouts.master')

@section('title', 'Contact List')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-semibold text-gray-800">Contact List</h1>
    <form method="GET" action="{{ route('admin.contacts.index') }}" class="flex items-center gap-2">
        <input type="text" name="search" class="rounded border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Search contacts..." value="{{ request('search') }}">
        <button type="submit" class="inline-flex items-center px-3 py-2 rounded bg-indigo-600 text-white hover:bg-indigo-700">
            <i class="fas fa-search mr-2"></i> Search
        </button>
        @if(request('search'))
            <a href="{{ route('admin.contacts.index') }}" class="inline-flex items-center px-3 py-2 rounded bg-gray-100 text-gray-800 hover:bg-gray-200">
                <i class="fas fa-times mr-2"></i> Clear
            </a>
        @endif
    </form>
</div>

<div class="bg-white rounded-lg shadow">
    <div class="p-0">
        @if($contacts->count() > 0)
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Service</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Others Service</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Attachment</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($contacts as $contact)
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-700">{{ $contact->id }}</td>
                                <td class="px-4 py-3 text-sm text-gray-900 font-medium">{{ $contact->name }}</td>
                                <td class="px-4 py-3 text-sm text-indigo-700"><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>
                                <td class="px-4 py-3">
                                    @php
                                        $serviceDisplay = ucfirst(str_replace('-', ' ', $contact->service));
                                    @endphp
                                    <span class="inline-flex items-center px-2 py-1 rounded text-xs bg-blue-100 text-blue-800">{{ $serviceDisplay }}</span>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-700">
                                    @if($contact->others_service)
                                        <span class="inline-flex items-center px-2 py-1 rounded text-xs bg-purple-100 text-purple-800" title="{{ $contact->others_service }}">
                                            {{ Str::limit($contact->others_service, 40) }}
                                        </span>
                                    @else
                                        <span class="text-gray-400">-</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-700">
                                    @if($contact->message)
                                        <span class="inline-block max-w-[220px] truncate" title="{{ $contact->message }}">{{ Str::limit($contact->message, 50) }}</span>
                                    @else
                                        <span class="text-gray-400">No message</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-700">
                                    @if($contact->file_path)
                                        <div class="flex items-center gap-2">
                                            <a href="{{ route('admin.contacts.file.view', $contact->id) }}" target="_blank" class="text-indigo-600 hover:text-indigo-800" title="View File">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.contacts.file.download', $contact->id) }}" class="text-green-600 hover:text-green-800" title="Download File">
                                                <i class="fas fa-download"></i>
                                            </a>
                                            <span class="text-xs text-gray-500">{{ strtoupper(pathinfo($contact->file_path, PATHINFO_EXTENSION)) }}</span>
                                        </div>
                                    @else
                                        <span class="text-gray-400">No attachment</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-700">{{ $contact->created_at->format('M d, Y h:i A') }}</td>
                                <td class="px-4 py-3 text-right">
                                    <a href="{{ route('admin.contacts.show', $contact->id) }}" class="text-indigo-600 hover:text-indigo-800 mr-3" title="View"><i class="fas fa-eye"></i></a>
                                    <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this contact?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800" title="Delete"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="px-4 py-3 border-t bg-gray-50">{{ $contacts->links() }}</div>
        @else
            <div class="p-6 text-center text-gray-600">No contacts found.</div>
        @endif
    </div>
</div>
@endsection

@push('scripts')
@endpush

