@extends('layouts.public.header')

@section('content')

<div class="container mt-2 mb-4" style="width:40%">
    <div class="row justify-content-center">
        <div class="col-md-12" style="border: 1px solid">
            <form action="{{ route('user.course.buy') }}" method="POST">
                @csrf
                    <h3>Course</h3>
                    <div class="row">
                        <input type="hidden" name="course_id" value="{{ $course->id }}" />
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                        <input type="hidden" name="active" value="0" />
                        <div class="col-md-6">
                            <label for="name">Course name</label>
                            <input type="text" class="form-control" id="name" value="{{ $course->name }}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="level">Course level</label>
                            <input type="text" class="form-control" id="level" value="{{ $course->level }}" readonly>
                        </div>
                        <div class="col-md-2">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" value="{{ $course->price }}" readonly>
                        </div>
                    </div>
                    <hr>
                    <h3>Billing Address</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" id="first_name" value="{{ Auth::user()->first_name }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" id="last_name" value="{{ Auth::user()->last_name }}" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="address">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="city">City</label>
                                <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ old('city') }}">
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="zip">Zip</label>
                                <input type="text" class="form-control @error('zip') is-invalid @enderror" id="zip" name="zip" value="{{ old('zip') }}">
                                @error('zip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                    <hr>
                    <h3>Payment</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name_card">Name on Card</label>
                            <input type="text" class="form-control @error('name_card') is-invalid @enderror" id="name_card" name="name_card" value="{{ old('name_card') }}">
                            @error('name_card')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="number_card">Credit card number</label>
                            <input type="number" class="form-control @error('number_card') is-invalid @enderror" id="number_card" name="number_card" value="{{ old('number_card') }}">
                            @error('number_card')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exp_month">Exp Month</label>
                            <input type="number" class="form-control @error('exp_month') is-invalid @enderror" min="1" max="12" id="exp_month" name="exp_month" value="{{ old('exp_month') }}">
                            @error('exp_month')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="exp_year">Exp Year</label>
                            <input type="number" class="form-control @error('exp_year') is-invalid @enderror" min="2022" max="2032" id="exp_year" name="exp_year" value="{{ old('exp_year') }}">
                            @error('exp_year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="cvv">CVV</label>
                            <input type="number" class="form-control @error('cvv') is-invalid @enderror" id="card" name="cvv">
                            @error('cvv')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button  type="submit" class="btn btn-primary btn-block my-2">Continue to checkout</button>
            </form>
        </div>
    </div>

</div>

@endsection
