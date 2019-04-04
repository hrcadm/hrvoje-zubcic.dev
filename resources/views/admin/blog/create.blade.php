@extends('admin.layouts.app')

@section('tinymce')
    <script>tinymce.init({
            selector: "textarea",
            plugins: 'fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen link table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount a11ychecker textpattern help formatpainter permanentpen pageembed mentions linkchecker',
            toolbar: 'formatselect | bold italic strikethrough forecolor backcolor formatpainter | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat',
        });</script>
@endsection

@section('content')

    <h1>Create New Post</h1>

    <form action="{{ route('adminStorePost') }}" method="POST">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="postTitle">Post Title</label>
            <input type="text" id="postTitle" class="form-control" name="postTitle">
        </div>

        <div class="form-group">
            <label for="postCategory">Post Category</label>
            <select name="postCategory" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="postShortDesc">Post Short Description</label>
            <input type="text" id="postShortDesc" class="form-control" name="postShortDesc">
        </div>

        <div class="form-group">
            <label for="postContent">Content</label>
            <textarea name="postContent" id="postContent" style="min-height: 500px;"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-success form-control">
        </div>

    </form>

@endsection