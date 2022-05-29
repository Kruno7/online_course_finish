@extends('layouts.public.header')

@section('content')
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="row">
                        <div class="card-body">
                            <h3>Quiz:</h3>
                            @foreach ($user->quizzes as $quiz)
                                {{ $quiz->name }}
                            @endforeach
                            <hr>
                                <h4>Your score:</h4>
                                @foreach ($results as $result)
                                    <p><b>Corect: </b>{{ $result->correct }}</p>
                                    <p><b>Wrong: </b>{{ $result->wrong }}</p>
                                    <p><b>Total: </b>{{ $result->total }}%</p>
                                @endforeach
                            <hr>
                            
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Course name</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($user_courses as $user_course)
                                <tr>
                                    <td>{{ $user_course->course->id }}</td>
                                    <td>{{ $user_course->course->name }}</td>
                                    <td>{{ $user_course->course->level }}</td>
                                    <td>{{ $user_course->course->price }}</td>
                                    <td>
                                        
                                    @if ($user_course->active == 0)
                                        <a href="{{ route('user.profile.upload.bill.id', $user_course->id) }}" class="btn btn-primary btn-sm">Upload bill</a>
                                    @elseif ($user_course->active == 2)
                                    <button type="button" class="btn btn-warning btn-sm" disabled>On Hold</button>
                                    @elseif ($user_course->active == 1)
                                        <button type="button" class="btn btn-success btn-sm" disabled>Paid</button>
                                    
                                    @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                             
                     </div>
                    
                </div>    
            </div>
            
        </div>
    </div>
</div>
@endsection
