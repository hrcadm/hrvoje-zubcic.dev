@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <p>* Required fields</p>
            <form action="{{ route('adminUpdateProject', $project->id) }}" method="POST" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PUT">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="projectTitle">Title*:</label><br>
                    <input type="text" name="projectTitle" id="projectTitle" class="form-control" value="{{ $project->title }}">
                </div>

                <div class="form-group">
                    <label for="projectLogo">Logo/Img*:</label>
                    <input type="file" name="projectLogo" id="projectLogo" value="{{ $project->logo }}">
                </div>

                <div class="form-group">
                    <label for="mainTechs">Main Techs* (separate by comma, up to 2 or 3 short)</label>
                    <input type="mainTechs" name="mainTechs" id="mainTechs" class="form-control" value="{{ $project->main_techs }}">
                </div>

                <div class="form-group">
                    <label for="projectFeatured">Featured*:</label>
                    <input type="radio" name="projectFeatured" value="1" {{ ($project->featured === 1) ? 'checked' : '' }}> Yes
                    <input type="radio" name="projectFeatured" value="0" {{ ($project->featured === 0) ? 'checked' : '' }}> No
                </div>

                <div class="from-group">
                    <label for="hasContent">Has content?*</label>
                    <input type="radio" name="hasContent" value="1" {{ ($project->has_content === 1) ? 'checked' : '' }}> Yes
                    <input type="radio" name="hasContent" value="0" {{ ($project->has_content === 0) ? 'checked' : '' }}> No
                </div>

                <hr>
                <p>If "Has content" is false, leave empty under this line</p>
                <hr>

                <div class="form-group">
                    <label for="projectClient">Client:</label><br>
                    <input type="text" name="projectClient" id="projectClient" class="form-control" value="{{ $project->client }}">
                </div>

                <div class="form-group">
                    <label for="projectUrl">URL:</label><br>
                    <input type="text" name="projectUrl" id="projectUrl" class="form-control" value="{{ $project->project_url }}">
                </div>

                <div class="form-group">
                    <label for="techStack">Tech Stack (separate by comma)</label>
                    <input type="text" name="techStack" id="techStack" class="form-control" value="{{ $project->tech_stack }}">
                </div>

                <div class="form-group">
                    <label for="projectContent">Content:</label><br>
                    <textarea name="projectContent" id="projectContent" class="form-control" style="min-height: 100px">
                        {{ $project->content }}
                    </textarea>
                </div>

                <input type="submit" value="Update" class="btn btn-success">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Cancel</a>
            </form>
        </div>
    </div>

@endsection