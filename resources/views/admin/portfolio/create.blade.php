@extends('admin.layouts.app')

@section('tinymce')
    <script>tinymce.init({
            selector: "textarea",
            plugins: 'fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen link table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount a11ychecker textpattern help formatpainter permanentpen pageembed mentions linkchecker',
            toolbar: 'formatselect | bold italic strikethrough forecolor backcolor formatpainter | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat',
        });</script>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <p>* Required fields</p>
            <form action="{{ route('adminStoreProject')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="projectTitle">Title*:</label><br>
                    <input type="text" name="projectTitle" id="projectTitle" class="form-control">
                </div>

                <div class="form-group">
                    <label for="projectLogo">Logo/Img*:</label>
                    <input type="file" name="projectLogo" id="projectLogo">
                </div>

                <div class="form-group">
                    <label for="mainTechs">Main Techs* (separate by comma, up to 2 or 3 short)</label>
                    <input type="mainTechs" name="mainTechs" id="mainTechs" class="form-control">
                </div>

                <div class="form-group">
                    <label for="projectFeatured">Featured*:</label>
                    <input type="radio" name="projectFeatured" value="1"> Yes
                    <input type="radio" name="projectFeatured" value="0"> No
                </div>

                <div class="from-group">
                    <label for="hasContent">Has content?*</label>
                    <input type="radio" name="hasContent" value="1"> Yes
                    <input type="radio" name="hasContent" value="0"> No
                </div>

                <hr>
                <p>If "Has content" is false, leave empty under this line</p>
                <hr>

                <div class="form-group">
                    <label for="projectClient">Client:</label><br>
                    <input type="text" name="projectClient" id="projectClient" class="form-control">
                </div>

                <div class="form-group">
                    <label for="projectUrl">URL:</label><br>
                    <input type="text" name="projectUrl" id="projectUrl" class="form-control">
                </div>

                <div class="form-group">
                    <label for="techStack">Tech Stack (separate by comma)</label>
                    <input type="text" name="techStack" id="techStack" class="form-control">
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