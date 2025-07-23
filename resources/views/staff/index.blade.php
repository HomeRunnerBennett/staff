@extends('layouts.master')

@section('title', 'Staff Members')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Staff Members</h2>
    <a href="{{ route('staff.create') }}" class="btn btn-primary">Add New Staff</a>
</div>

<div class="card mb-4">
    <div class="card-body">
        <form action="{{ route('staff.index') }}" method="GET" class="row g-3">
            <div class="col-md-5">
                <input type="text" name="search" class="form-control" placeholder="Search by name, email or phone" value="{{ request('search') }}">
            </div>
            <div class="col-md-3">
                <select name="status" class="form-select">
                    <option value="">All Statuses</option>
                    <option value="Active" {{ request('status') == 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ request('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Filter</button>
                <a href="{{ route('staff.index') }}" class="btn btn-secondary">Reset</a>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($staff as $member)
                    <tr>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->position }}</td>
                        <td>{{ $member->department }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->phone ?? 'N/A' }}</td>
                        <td>
                            <span class="status-badge status-{{ strtolower($member->status) }}">
                                {{ $member->status }}
                            </span>
                        </td>
                        <td class="action-btns">
                            <a href="{{ route('staff.show', $member->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('staff.edit', $member->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('staff.destroy', $member->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">No staff members found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="mt-4">
            {{ $staff->appends(request()->query())->links() }}
        </div>
    </div>
</div>
@endsection