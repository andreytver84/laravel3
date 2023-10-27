@extends('layouts/main')
@section('content')
<style>
    form {
        max-width: 500px;
        padding: 20px;
        background: #f0f0f0;
    }
    form div {
        display: flex;
        flex-direction: column;
        margin: 20px 0;
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
<h1>Create task</h1>
<form action="{{route('todo.store')}}" method="post">
    @csrf
    <div>
        <label for="title" >Head of task</label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="description" >Description</label>
        <textarea type="text" name="description" id="description"></textarea>
    </div>
    <input type="submit" value="ADD TASK" >
</form>
<a class="btn" href="{{route('todo.index')}}" >BACK</a>
@endsection