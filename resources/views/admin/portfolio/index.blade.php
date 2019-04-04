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

    <a href="{{ route('adminNewProject') }}" class="btn btn-outline-success">Create New Project</a>

    <table class="table table-responsive table-hover"  style="margin-top:2em;">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Client</th>
            <th>Featured</th>
            <th>Has content</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td class="text-center">
                    @if($project->client)
                        {{ $project->client }}
                    @else
                        <i class="fa fa-times" style="color: #FF0000"></i>
                    @endif
                </td>
                <td class="text-center">
                    @if($project->featured === 1)
                        <i class="fa fa-check" aria-hidden="true" style="color: #00FF00"></i>
                    @else
                        <i class="fa fa-times" style="color: #FF0000"></i>
                    @endif
                </td>
                <td class="text-center">
                    @if($project->has_content === 1)
                        <i class="fa fa-check" aria-hidden="true" style="color: #00FF00"></i>
                    @else
                        <i class="fa fa-times" style="color: #FF0000"></i>
                    @endif
                </td>
                <td>
                    <a href="{{ route('adminShowProject', $project->id) }}" class="btn btn-sm btn-primary">Show</a>
                    <a href="{{ route('adminEditProject', $project->id) }}" class="btn btn-sm btn-success">Edit</a>
                    <form action="{{ route('adminDeleteProject', $project->id) }}" method="POST" style="display: inline">
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