@extends('admin.dashboard.master')

@section('content')


<div class="container">
    <h2>Contact Messages</h2>

    @if ($contacts->isEmpty())
        <p>No messages found.</p>
    @else
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
<style>
    .container {
        max-width: 800px; /* ضبط العرض الأقصى */
        margin: 0 auto; /* لتوسيط المحتوى */
    }

    table {
        width: 100%; /* جعل الجدول يمتد ليملأ عرض الحاوية */
        border-collapse: collapse; /* دمج الحدود */
    }

    th, td {
        border: 1px solid #ddd; /* حدود الخلايا */
        padding: 10px; /* الحشوة داخل الخلايا */
        text-align: left; /* محاذاة النص إلى اليسار */
    }

    th {
        background-color: #007bff; /* لون خلفية العناوين */
        color: white; /* لون نص العناوين */
    }

    tr:nth-child(even) {
        background-color: #f2f2f2; /* خلفية لونية للخلايا الزوجية */
    }
</style>
