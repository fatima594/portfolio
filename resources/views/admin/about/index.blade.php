@extends('admin.dashboard.master')

@section('content')
    <div class="container">
        <h1>Abouts</h1>
        <a href="{{ route('admin.about.create') }}" class="btn btn-primary">Create New About</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($abouts as $about)
                <tr>
                    <td>{{ $about->id }}</td>
                    <td>{{ $about->title }}</td>
                    <td>{{ $about->body }}</td>
                    <td>
                        @if ($about->image)
                            <img src="{{ Storage::url($about->image) }}" alt="{{ $about->title }}" width="100">
                        @else
                            <span>لا توجد صورة</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.about.edit', $about) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.about.destroy', $about) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
