@extends('admin.dashboard.master')

@section('content')
    <div class="container">
        <h1>Add New Project</h1>

        <form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" name="title" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="file" class="form-control" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection

<script>
    document.querySelector('form').onsubmit = function() {
        const submitButton = document.querySelector('button[type="submit"]');
        submitButton.disabled = true; // تعطيل الزر
    };
</script>

