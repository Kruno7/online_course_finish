@extends('layouts.public.header')

@section('content')
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <form action="{{ route('user.profile.upload.bill') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_course_id" value="{{ $user_course->id }}" />
            <div class="form-group">
                <label for="exampleInputEmail1">Course name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $user_course->course->name }}" readonly>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Curse level</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $user_course->course->level }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Curse price</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" value="{{ $user_course->course->price }}" readonly>
                    </div>
                </div>
            </div>
          
            <div class="input-group my-3">
                <input type="file" class="form-control" name="pdf_file" id="inputGroupFile02">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection