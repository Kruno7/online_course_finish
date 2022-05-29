@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show') }}</div>

                <div class="card-body">
                @foreach($quiz->questions as $key => $question)
                        <ul style="list-style-type: none">
                            <li>
                                <h3>{{ $key+1 }}. {{ $question->question }}...</h3>
                                @error('quizcheck')
                                    <small class="form-text text-warning">{{ $message }}</small>
                                @enderror
                                @foreach($question->answers as $answer)
                                    <div>
                                        <strong>{{ $answer->answer }} </strong>  
                                        @if ($answer->correct == 1)
                                            <i class="fa fa-check"></i> 
                                        @endif
                                    </div>
                                @endforeach
                                <form action="{{ route('teacher.quiz.destroy-question', $question->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</button>
                                </form>
                                <hr>
                                
                            </li>
                        </ul>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection 


