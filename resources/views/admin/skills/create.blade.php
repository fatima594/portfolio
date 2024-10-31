@extends('admin.dashboard.master')

@section('content')
    <div class="container mt-5">
        <h1>Add Skill</h1>
        <form action="{{ route('admin.skills.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Skill Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Skill Name" required>
            </div>
            <div class="form-group">
                <label for="proficiency">Proficiency (%)</label>
                <input type="number" id="proficiency" name="proficiency" class="form-control" placeholder="Proficiency (0-100)" min="0" max="100" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" placeholder="Description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
