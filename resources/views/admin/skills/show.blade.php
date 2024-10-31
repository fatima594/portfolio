@extends('admin.dashboard.master')

@section('content')
    <div class="container mt-5">
        <h1>{{ $skill->name }}</h1>
        <p><strong>Proficiency:</strong> {{ $skill->proficiency }}%</p>
        <p><strong>Description:</strong></p>
        <p>{{ $skill->description }}</p>

        <div class="mt-4">
            <a href="{{ route('admin.skills.index') }}" class="btn btn-secondary">Back to Skills</a>
            <a href="{{ route('admin.skills.edit', $skill) }}" class="btn btn-warning">Edit</a>

            <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
