@extends('admin.layouts.app')

@section('content')
    <table class="table table-responsive table-hover"  style="width: auto; margin-top:2em;">
        <thead>
            <tr>
                <th>ID</th>
                <th>From</th>
                <th>E-mail</th>
                <th>Message</th>
                <th>Submitted At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($submissions as $submission)
            <tr>
                <td>{{ $submission->id }}</td>
                <td>{{ $submission->message_from }}</td>
                <td>{{ $submission->Message_email }}</td>
                <td>{{ $submission->message_content }}</td>
                <td>{{ $submission->created_at }}</td>
                <td>
                    <a href="{{ route('adminShowContactFormSubmission', $submission->id) }}" class="btn btn-sm btn-primary">Show</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection