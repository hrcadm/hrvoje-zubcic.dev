@extends('admin.layouts.app')

@section('tinymce')
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=bryudn13ntrxh54wc3si1oi14yc4oeslvh7ljmq9xdbf8hnh"></script>
    <script>tinymce.init({
            selector: "textarea",
            plugins: 'fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen link table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount a11ychecker textpattern help formatpainter permanentpen pageembed mentions linkchecker',
            toolbar: 'formatselect | bold italic strikethrough forecolor backcolor formatpainter | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat',
        });</script>
@endsection

@section('content')

    <h1>Create New Post</h1>

    <form action="{{ route('adminUpdatePost', $post->id) }}" method="POST">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="postTitle">Post Title</label>
            <input type="text" id="postTitle" class="form-control" name="postTitle" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="postCategory">Post Category</label>
            <select name="postCategory" class="form-control">
                <option value="{{ $post->category->id }}">{{ $post->category->name }} *</option>
                @foreach($categories as $category)
                    @if($category->name !== $post->category->name)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="postShortDesc">Post Short Description</label>
            <input type="text" id="postShortDesc" class="form-control" name="postShortDesc" value="{{ $post->short_description }}">
        </div>

        <div class="form-group">
            <label for="postContent">Content</label>
            <textarea name="postContent" id="postContent" style="min-height: 500px;">{{ $post->content }}</textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-success form-control">
        </div>

    </form>

@endsection