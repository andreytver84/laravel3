@extends('layouts/main')
@section('content')
<style>
    a {
        color: #222;
    }
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
<h1>Tasks</h1>
<ol>
        @foreach ($todo as $do)
            <li><a href="{{route('todo.show',$do->id)}}">{{$do->title}}</a></li>
        @endforeach
</ol>
<a class="btn" href="{{route('todo.create')}}" >Create task</a>
@endsection