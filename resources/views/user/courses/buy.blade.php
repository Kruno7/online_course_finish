@extends('layouts.public.header')

@section('content')
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <h3>Success: </h3> Download (BILL) PDF File <a href="{{ route('user.course.buy.show') }}" class="alert-link">Show</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
