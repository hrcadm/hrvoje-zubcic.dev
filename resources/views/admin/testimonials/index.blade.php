@extends('admin.layouts.app')

@section('content')

    @if (\Session::has('msg') && \Session::get('msg') === 'successNewTestimonial')
       <div class="alert alert-success">
           Testimonial Added Successfully!
       </div>
    @elseif(\Session::has('msg') && \Session::get('msg') === 'successUpdateTestimonial')
        <div class="alert alert-success">
            Testimonial Updated Successfully!
        </div>
    @elseif(\Session::has('msg') && \Session::get('msg') === 'successDeleteTestimonial')
        <div class="alert alert-success">
            Testimonial Deleted Successfully!
        </div>
    @endif

    <a href="{{ route('adminNewTestimonial') }}" class="btn btn-outline-success">Create New Testimonial</a>

    <table class="table table-responsive table-hover"  style="margin-top:2em;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Order</th>
                <th>Author</th>
                <th>Role</th>
                <th>Company</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $testimonial)
                <tr>
                    <td>{{ $testimonial->id }}</td>
                    <td>{{ $testimonial->testimonial_order }}</td>
                    <td>{{ $testimonial->testimonial_author_name }}</td>
                    <td>{{ $testimonial->testimonial_author_role }}</td>
                    <td>{{ $testimonial->testimonial_author_company }}</td>
                    <td class="text-center">
                        @if($testimonial->testimonial_note !== null)
                            {{ $testimonial->testimonial_note }}
                        @else
                            <i class="fa fa-times" style="color: #FF0000"></i>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('adminShowTestimonial', $testimonial->id) }}" class="btn btn-sm btn-primary">Show</a>
                        <a href="{{ route('adminEditTestimonial', $testimonial->id) }}" class="btn btn-sm btn-success">Edit</a>
                        <form action="{{ route('adminDeleteTestimonial', $testimonial->id) }}" method="POST" style="display: inline">
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