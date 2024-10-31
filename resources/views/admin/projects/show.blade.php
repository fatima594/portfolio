@extends('admin.dashboard.master')

@section('content')
    <div class="container">
        <h1>{{ $project->name }}</h1>
        <p>{{ $project->title }}</p>
        @if ($project->image)
            <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" width="100">
        @else
            <span>No Image</span>
        @endif
        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning">تحرير</a>
        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">حذف</button>
        </form>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">العودة</a>
    </div>
@endsection
