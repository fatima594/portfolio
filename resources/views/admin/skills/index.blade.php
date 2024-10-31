@extends('admin.dashboard.master')

@section('content')
    <div class="container mt-5">
        <h1>Skills</h1>
        <a href="{{ route('admin.skills.create') }}" class="btn btn-success mb-3">Add Skill</a>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Skill Name</th>
                <th>Proficiency (%)</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($skills as $skill)
                <tr>
                    <td><strong>{{ $skill->name }}</strong></td>
                    <td>{{ $skill->proficiency }}</td>
                    <td>{{ $skill->description }}</td>
                    <td>
                        <a href="{{ route('admin.skills.edit', $skill) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
