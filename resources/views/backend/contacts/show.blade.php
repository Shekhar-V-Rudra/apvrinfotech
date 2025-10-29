@extends('backend.layouts.master')

@section('title', 'Contact Details')

@section('content')
<div class="page-header d-flex justify-content-between align-items-center">
    <h1 class="h3">Contact Details</h1>
    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back to List
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Contact Information</h5>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-2"><strong>ID:</strong></div>
            <div class="col-md-10">{{ $contact->id }}</div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-2"><strong>Name:</strong></div>
            <div class="col-md-10">{{ $contact->name }}</div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-2"><strong>Email:</strong></div>
            <div class="col-md-10">
                <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-2"><strong>Service:</strong></div>
            <div class="col-md-10">
                <span class="badge bg-info">{{ ucfirst(str_replace('-', ' ', $contact->service)) }}</span>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-2"><strong>Message:</strong></div>
            <div class="col-md-10">
                <div class="border p-3 rounded bg-light">
                    {{ $contact->message ?: 'No message provided.' }}
                </div>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-2"><strong>Submitted:</strong></div>
            <div class="col-md-10">
                {{ $contact->created_at->format('F d, Y \a\t h:i A') }}
            </div>
        </div>
    </div>
    <div class="card-footer">
        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this contact?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash"></i> Delete Contact
            </button>
        </form>
    </div>
</div>
@endsection

