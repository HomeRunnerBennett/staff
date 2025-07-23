@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Add a Candidate</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('candidate.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="name" class="form-label">Candidate Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Candidate District</label>
                <input type="text" class="form-control" id="name" name="district" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Candidate District</label>
                <input type="text" class="form-control" id="name" name="ethnicity" required>
            </div>
            
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" min="5" max="20" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Add Candidate</button>
            <a href="{{ route('candidate.index') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
</div>
@endsection