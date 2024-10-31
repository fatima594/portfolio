@extends('admin.dashboard.master')

@section('content')
    <div class="container mt-5">
        <h1>Edit Skill</h1>
        <form action="{{ route('admin.skills.update', $skill) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Skill Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $skill->name }}" required>
            </div>
            <div class="form-group">
                <label for="proficiency">Proficiency (%)</label>
                <input type="number" id="proficiency" name="proficiency" class="form-control" value="{{ $skill->proficiency }}" min="0" max="100" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control">{{ $skill->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
