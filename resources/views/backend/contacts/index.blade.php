@extends('backend.layouts.master')

@section('title', 'Contact List')

@section('content')
<div class="page-header">
    <h1 class="h3">Contact List</h1>
</div>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">All Contacts</h5>
        <div class="d-flex gap-2">
            <form method="GET" action="{{ route('admin.contacts.index') }}" class="d-flex">
                <input type="text" name="search" class="form-control form-control-sm me-2" placeholder="Search contacts..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fas fa-search"></i> Search
                </button>
                @if(request('search'))
                    <a href="{{ route('admin.contacts.index') }}" class="btn btn-sm btn-secondary">
                        <i class="fas fa-times"></i> Clear
                    </a>
                @endif
            </form>
        </div>
    </div>
    <div class="card-body">
        @if($contacts->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="contactsTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Service</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>
                                    <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                </td>
                                <td>
                                    <span class="badge bg-info">{{ ucfirst(str_replace('-', ' ', $contact->service)) }}</span>
                                </td>
                                <td>
                                    @if($contact->message)
                                        <span class="text-truncate d-inline-block" style="max-width: 200px;" title="{{ $contact->message }}">
                                            {{ Str::limit($contact->message, 50) }}
                                        </span>
                                    @else
                                        <span class="text-muted">No message</span>
                                    @endif
                                </td>
                                <td>{{ $contact->created_at->format('M d, Y h:i A') }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.contacts.show', $contact->id) }}" class="btn btn-sm btn-info" title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this contact?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-3">
                {{ $contacts->links() }}
            </div>
        @else
            <div class="alert alert-info text-center">
                <i class="fas fa-info-circle me-2"></i>No contacts found.
            </div>
        @endif
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        if ($('#contactsTable').length > 0 && $('#contactsTable tbody tr').length > 0) {
            $('#contactsTable').DataTable({
                paging: false,
                info: false,
                searching: false,
                order: [[0, 'desc']],
                columnDefs: [
                    { orderable: false, targets: 6 }
                ]
            });
        }
    });
</script>
@endpush

