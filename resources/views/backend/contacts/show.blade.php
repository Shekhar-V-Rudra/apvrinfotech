@extends('backend.layouts.master')

@section('title', 'Contact Details')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-semibold text-gray-800">Contact Details</h1>
    <a href="{{ route('admin.contacts.index') }}" class="inline-flex items-center px-4 py-2 rounded bg-gray-100 text-gray-800 hover:bg-gray-200">
        <i class="fas fa-arrow-left mr-2"></i> Back to List
    </a>
  </div>

<div class="bg-white rounded-lg shadow">
    <div class="px-6 py-4 border-b">
        <h5 class="text-lg font-semibold text-gray-800">Contact Information</h5>
    </div>
    <div class="p-6 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-2 font-medium text-gray-600">ID:</div>
            <div class="col-span-12 md:col-span-10">{{ $contact->id }}</div>
        </div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-2 font-medium text-gray-600">Name:</div>
            <div class="col-span-12 md:col-span-10">{{ $contact->name }}</div>
        </div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-2 font-medium text-gray-600">Email:</div>
            <div class="col-span-12 md:col-span-10"><a href="mailto:{{ $contact->email }}" class="text-indigo-700">{{ $contact->email }}</a></div>
        </div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-2 font-medium text-gray-600">Service:</div>
            <div class="col-span-12 md:col-span-10">
                @php
                    $serviceDisplay = ucfirst(str_replace('-', ' ', $contact->service));
                @endphp
                <span class="inline-flex items-center px-2 py-1 rounded text-xs bg-blue-100 text-blue-800">{{ $serviceDisplay }}</span>
            </div>
        </div>
        @if($contact->others_service)
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-2 font-medium text-gray-600">Others Service:</div>
            <div class="col-span-12 md:col-span-10">
                <div class="border p-3 rounded bg-gray-50">
                    <span class="inline-flex items-center px-2 py-1 rounded text-xs bg-purple-100 text-purple-800 mb-2">Custom Service</span>
                    <p class="mt-2">{{ $contact->others_service }}</p>
                </div>
            </div>
        </div>
        @endif
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-2 font-medium text-gray-600">Message:</div>
            <div class="col-span-12 md:col-span-10">
                <div class="border p-3 rounded bg-gray-50">{{ $contact->message ?: 'No message provided.' }}</div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-2 font-medium text-gray-600">Attachment:</div>
            <div class="col-span-12 md:col-span-10">
                @if($contact->file_path)
                    @php
                        $extension = strtolower(pathinfo($contact->file_path, PATHINFO_EXTENSION));
                        $isViewable = in_array($extension, ['pdf', 'jpg', 'jpeg', 'png', 'gif', 'webp']);
                    @endphp
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <span class="inline-flex items-center px-3 py-2 rounded text-sm bg-blue-100 text-blue-800">
                                <i class="fas fa-file mr-2"></i> {{ strtoupper($extension) }} File
                            </span>
                            @if($isViewable)
                                <a href="{{ route('admin.contacts.file.view', $contact->id) }}" target="_blank" class="inline-flex items-center px-4 py-2 rounded bg-indigo-600 text-white hover:bg-indigo-700">
                                    <i class="fas fa-eye mr-2"></i> View File
                                </a>
                            @endif
                            <a href="{{ route('admin.contacts.file.download', $contact->id) }}" class="inline-flex items-center px-4 py-2 rounded bg-green-600 text-white hover:bg-green-700">
                                <i class="fas fa-download mr-2"></i> Download File
                            </a>
                        </div>
                        @if($isViewable)
                            <div class="border rounded-lg overflow-hidden bg-gray-50" style="height: 600px;">
                                <iframe src="{{ route('admin.contacts.file.view', $contact->id) }}" class="w-full h-full" frameborder="0">
                                    <p>Your browser does not support viewing this file. <a href="{{ route('admin.contacts.file.view', $contact->id) }}" target="_blank">Click here to open the file in a new tab</a> or <a href="{{ route('admin.contacts.file.download', $contact->id) }}">download it</a>.</p>
                                </iframe>
                            </div>
                        @else
                            <div class="border rounded-lg p-6 bg-gray-50 text-center">
                                <i class="fas fa-file fa-3x text-gray-400 mb-3"></i>
                                <p class="text-gray-600 mb-3">This file type cannot be previewed in the browser.</p>
                                <a href="{{ route('admin.contacts.file.download', $contact->id) }}" class="inline-flex items-center px-4 py-2 rounded bg-green-600 text-white hover:bg-green-700">
                                    <i class="fas fa-download mr-2"></i> Download File
                                </a>
                            </div>
                        @endif
                    </div>
                @else
                    <span class="text-gray-400">No attachment provided.</span>
                @endif
            </div>
        </div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-2 font-medium text-gray-600">Submitted:</div>
            <div class="col-span-12 md:col-span-10">{{ $contact->created_at->format('F d, Y \\a\\t h:i A') }}</div>
        </div>
    </div>
    <div class="px-6 py-4 border-t">
        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this contact?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="inline-flex items-center px-4 py-2 rounded bg-red-600 text-white hover:bg-red-700">
                <i class="fas fa-trash mr-2"></i> Delete Contact
            </button>
        </form>
    </div>
</div>
@endsection

