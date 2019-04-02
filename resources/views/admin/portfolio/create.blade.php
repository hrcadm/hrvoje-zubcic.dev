@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <p>* Required fields</p>
            <form action="{{ route('adminStoreProject')}}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="projectTitle">Title*:</label><br>
                    <input type="text" name="projectTitle" id="projectTitle" class="form-control">
                </div>
                <div class="form-group">
                    <label for="projectContentTitle">Content Title:</label><br>
                    <input type="text" name="projectContentTitle" id="projectContentTitle" class="form-control">
                </div>
                <div class="form-group">
                    <label for="projectClient">Client:</label><br>
                    <input type="text" name="projectClient" id="projectClient" class="form-control">
                </div>
                <div class="form-group">
                    <label for="projectUrl">URL:</label><br>
                    <input type="text" name="projectUrl" id="projectUrl" class="form-control">
                </div>
                <div class="form-group">
                    <label for="projectFeatured">Featured*:</label><br>
                    <select name="projectFeatured" id="projectFeatured">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="projectShortDesc">Short Description*:</label><br>
                    <textarea name="projectShortDesc" id="projectShortDesc" class="form-control" style="min-height: 100px"></textarea>
                </div>
                <div class="form-group">
                    <label for="projectContent">Content:</label><br>
                    <textarea name="projectContent" id="projectContent" class="form-control" style="min-height: 100px"></textarea>
                </div>

                <input type="submit" value="Create" class="btn btn-success">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Cancel</a>
            </form>
        </div>
    </div>

@endsection