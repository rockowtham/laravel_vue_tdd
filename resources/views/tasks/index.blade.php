@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="page-header">
                    <h2>All Tasks</h2>
                </div>
                @foreach($tasks as $task)
                <div class="card">
                    <a href="{{url('tasks/'.$task->id)}}"><div class="card-header">{{$task->title}}</div></a>

                    <div class="card-body">
                        {{$task->description}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection