@extends('admin.dashboard.master')

@section('content')
    <div class="container">
        <h1> Update Project</h1>

        <form method="POST" action="{{ route('admin.projects.update', $project) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" value="{{ $project->name }}" required>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" name="title" value="{{ $project->title }}" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control">
                @if ($project->image)
                    <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" width="100">
                @else
                    <span>No Image</span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
@endsection
