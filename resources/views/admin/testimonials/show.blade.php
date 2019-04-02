@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    {{ $testimonial->testimonial_author_name }}, {{ $testimonial->testimonial_author_role }} @if($testimonial->testimonial_author_company) @ {{ $testimonial->testimonial_author_company }} @endif
                </div>
                <div class="card-body">
                    <h5 class="card-title">Order of appearance: {{ $testimonial->testimonial_order }}</h5>
                    <h6 class="card-title">Note: {{ ($testimonial->testimonial_note) ? $testimonial->testimonial_note : 'n/a' }}</h6>
                    <p class="card-text">{{ $testimonial->testimonial_content }}</p>
                    <a href="{{ route('adminEditTestimonial', $testimonial->id) }}" class="btn btn-primary">Edit Testimonial</a>
                    <a href="{{ URL::previous() }}" class="btn btn-info">Back</a>
                </div>
            </div>
        </div>
    </div>

@endsection