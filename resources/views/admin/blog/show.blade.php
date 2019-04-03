@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <strong>Category:</strong> {{ $post->category->name }} : <strong>Created At:</strong> {{ $post->created_at }} : <strong>Updated At:</strong> {{ $post->updated_at }}
                </div>
                <div class="card-body">
                    <p>Author: {{ $post->author }}</p>
                    <h1>Title: {{ $post->title }}</h1>
                    <h4>Short Description: {{ $post->short_description }}</h4>
                    <hr>
                    <p>{!! $post->content !!}</p>
                </div>
            </div>
        </div>
    </div>

@endsection