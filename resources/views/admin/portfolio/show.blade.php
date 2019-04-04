@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <strong>{{ $project->title }}</strong> (Featured: {{ ($project->featured === 1) ? 'Yes' : 'No' }})
                </div>
                <div class="card-body">

                    <img src="{{ asset('storage/projectLogos/' . $project->logo) }}" alt="logo" style="width: 300px;height: 300px;">

                    <h5 class="card-title">Client: {{ $project->client }}</h5>
                    <h6 class="card-title">URL: {{ ($project->project_url) ? $project->project_url : 'n/a' }}</h6>
                    <p class="card-text">Content: {{ $project->content }}</p>

                    <a href="{{ route('adminEditProject', $project->id) }}" class="btn btn-primary">Edit Project</a>
                    <a href="{{ URL::previous() }}" class="btn btn-info">Back</a>
                </div>
            </div>
        </div>
    </div>

@endsection