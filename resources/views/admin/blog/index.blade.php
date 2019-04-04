@extends('admin.layouts.app')

@section('content')

    @if (\Session::has('msg') && \Session::get('msg') === 'successNewProject')
        <div class="alert alert-success">
            Project Added Successfully!
        </div>
    @elseif(\Session::has('msg') && \Session::get('msg') === 'successUpdateProject')
        <div class="alert alert-success">
            Project Updated Successfully!
        </div>
    @elseif(\Session::has('msg') && \Session::get('msg') === 'successDeleteProject')
        <div class="alert alert-success">
            Project Deleted Successfully!
        </div>
    @endif

    <a href="{{ route('adminNewPost') }}" class="btn btn-outline-success">Create New Post</a>

    <table class="table table-responsive table-hover"  style="margin-top:2em;">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Short Desc</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->short_description }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <a href="{{ route('adminShowPost', $post->id) }}" class="btn btn-sm btn-primary">Show</a>
                    <a href="{{ route('adminEditPost', $post->id) }}" class="btn btn-sm btn-success">Edit</a>
                    <form action="{{ route('adminDeletePost', $post->id) }}" method="POST" style="display: inline">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden">
                        <input type="submit" class="btn btn-sm btn-danger" value="Delete" onclick="return confirm('Are you sure?')">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection