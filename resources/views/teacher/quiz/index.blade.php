@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('partials.alert')
            <div class="card">
                <div class="card-header">{{ __('Quiz') }}</div>

                <div class="card-body">
                <a href="{{ route('teacher.quiz.create') }}" class="btn btn-outline-primary mt-2 mb-4">Add new quiz</a>

                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Show</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quizzes as $quiz)
                    <tr>
                        <th scope="row">{{ $quiz->id }}</th>
                        <td>{{ $quiz->name }}</td>
                        <td>
                        <a href="{{ route('teacher.quiz.show', $quiz->id) }}" class="btn btn-outline-primary btn-sm">Show</a>
                     
                        </td>
                        <td>
                            @if ($quiz->user_id === Auth::user()->id)
                                <a href="{{ route('teacher.quiz.edit', $quiz->id) }}" class="btn btn-outline-warning btn-sm">Edit</a>
                            @endif
                        </td>
                        <td>
                        @if ($quiz->user_id === Auth::user()->id)
                        <form action="{{ route('teacher.quiz.destroy', $quiz->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</button>
                        </form>
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
@endsection
