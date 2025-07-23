@extends('layouts.candidate')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>Candidates List</h4>
        <a href="{{ route('students.create') }}" class="btn btn-success">Add New Candidate</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>District</th>
                    <th>Ethnicity</th>
                    <th>Gender</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach($candidate as $candidate)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->district }}</td>
                    <td>{{ $student->ethinicity }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->age }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection