@extends('admin.layouts.app')

@section('content')
    <div class="alert alert-success">
        Subscribers: {{ count($subscriptions) }}
    </div>

    <table class="table table-responsive table-hover"  style="margin-top:2em;">
        <thead>
        <tr>
            <th>ID</th>
            <th>Subscriber Name</th>
            <th>Subscriber E-mail</th>
        </tr>
        </thead>
        <tbody>
        @foreach($subscriptions as $subscriber)
            <tr>
                <td>{{ $subscriber->id }}</td>
                <td>{{ $subscriber->subscriber_name }}</td>
                <td>{{ $subscriber->subscriber_email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection