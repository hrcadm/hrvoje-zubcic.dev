@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    {{ $submission->message_from }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">E-mail: <a href="mailto:{{ $submission->message_email }}">{{ $submission->message_email }}</a></h5>
                    <h6 class="card-title">Submitted at: {{ $submission->created_at }}</h6>
                    <p class="card-text">{{ $submission->message_content }}</p>
                    <a href="{{ URL::previous() }}" class="btn btn-info">Back</a>
                </div>
            </div>
        </div>
    </div>

@endsection