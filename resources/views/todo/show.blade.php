@extends('layouts/main')
@section('content')
<style>
    .btn {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        background: #222222;
        color: #fff;
        text-decoration: none;
        padding: 20px 40px;
        border-radius: 2px;
        margin-top: 20px;
    }
    .btn:hover {
        background: #f0f0f0;
        color: #000;
    }
</style>
<h1>{{$todo->title}}</h1>
<p>
{{$todo->description}}
</p>
<a class="btn" href="{{route('todo.index')}}" >BACK</a>
@endsection