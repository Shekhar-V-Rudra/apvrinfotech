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
            <div class="col-span-12 md:col-span-10"><span class="inline-flex items-center px-2 py-1 rounded text-xs bg-blue-100 text-blue-800">{{ ucfirst(str_replace('-', ' ', $contact->service)) }}</span></div>
        </div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-2 font-medium text-gray-600">Message:</div>
            <div class="col-span-12 md:col-span-10">
                <div class="border p-3 rounded bg-gray-50">{{ $contact->message ?: 'No message provided.' }}</div>
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

