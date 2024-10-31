@extends('admin.dashboard.master')

@section('content')
    <div class="container">
        <h2>Projects</h2>
        <hr>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Add New Project</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>title</th>
                <th>image</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td> <!-- إضافة معرف المشروع -->
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->title }}</td>
                    <td>
                        @if ($project->image)
                            <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" width="100">
                        @else
                            <span>لا توجد صورة</span>
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-info">show</a>
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning">edit</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
