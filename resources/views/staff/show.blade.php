@extends('layouts.master')

@section('title', 'Staff Member Details')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Staff Member Details</h3>
        <div class="card-options">
            <a href="{{ route('staff.edit', $staff->id) }}" class="btn btn-primary btn-sm">Edit</a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <p class="form-control-plaintext">{{ $staff->name }}</p>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <p class="form-control-plaintext">{{ $staff->email }}</p>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <p class="form-control-plaintext">{{ $staff->phone ?? 'N/A' }}</p>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <p class="form-control-plaintext">{{ $staff->gender }}</p>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Position</label>
                    <p class="form-control-plaintext">{{ $staff->position }}</p>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Department</label>
                    <p class="form-control-plaintext">{{ $staff->department }}</p>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Salary</label>
                    <p class="form-control-plaintext">${{ number_format($staff->salary, 2) }}</p>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <p>
                        <span class="status-badge status-{{ strtolower($staff->status) }}">
                            {{ $staff->status }}
                        </span>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Hire Date</label>
                    <p class="form-control-plaintext">{{ $staff->hire_date->format('M d, Y') }}</p>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Years of Service</label>
                    <p class="form-control-plaintext">{{ $staff->hire_date->diffInYears(now()) }} years</p>
                </div>
            </div>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Address</label>
            <p class="form-control-plaintext">{{ $staff->address ?? 'N/A' }}</p>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('staff.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection