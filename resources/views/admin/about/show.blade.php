@extends('admin.dashboard.master')

@section('content')
    <div class="container">
        <h1>{{ $about->title }}</h1>
        <p>{{ $about->body }}</p>
        @if ($about->image)
            <img src="{{ asset('storage/' . $about->image) }}" alt="Image" style="max-width: 100%;">
        @endif
        <a href="{{ route('admin.about.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
