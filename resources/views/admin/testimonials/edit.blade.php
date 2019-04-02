@extends('admin.layouts.app')

@section('content')
    
    <div class="row">
        <div class="col-12">
            <p>* Required fields</p>
            <form action="{{ route('adminUpdateTestimonial', $testimonial->id) }}" method="POST">
                <input name="_method" type="hidden" value="PUT">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="testimonialOrder">Order*:</label><br>
                    <input type="number" name="testimonialOrder" id="testimonialOrder" class="form-control" value="{{ $testimonial->testimonial_order }}">
                </div>
                <div class="form-group">
                    <label for="testimonialAuthorName">Author*:</label><br>
                    <input type="text" name="testimonialAuthorName" id="testimonialAuthorName" class="form-control" value="{{ $testimonial->testimonial_author_name }}">
                </div>
                <div class="form-group">
                    <label for="testimonialAuthorRole">Role*:</label><br>
                    <input type="text" name="testimonialAuthorRole" id="testimonialAuthorRole" class="form-control" value="{{ $testimonial->testimonial_author_role }}">
                </div>
                <div class="form-group">
                    <label for="testimonialAuthorCompany">Company:</label><br>
                    <input type="text" name="testimonialAuthorCompany" id="testimonialAuthorCompany" class="form-control" value="{{ $testimonial->testimonial_author_company }}">
                </div>
                <div class="form-group">
                    <label for="testimonialNote">Note:</label><br>
                    <input type="text" name="testimonialNote" id="testimonialNote" class="form-control" value="{{ $testimonial->testimonial_note }}">
                </div>
                <div class="form-group">
                    <label for="testimonialContent">Content*:</label><br>
                    <textarea name="testimonialContent" id="testimonialContent" class="form-control" style="min-height: 100px">{{ $testimonial->testimonial_content }}</textarea>
                </div>

                <input type="submit" value="Update" class="btn btn-success">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Cancel</a>
            </form>
        </div>
    </div>

@endsection