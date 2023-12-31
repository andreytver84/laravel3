<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo = ToDo::all();
        return view('todo.index',compact('todo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    //public function store()
    {
        $data = request()->validate([
            'title'=>'',
            'description'=>''
        ]);
        ToDo::create($data);
        return redirect()->route('todo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ToDo $todo)
    {
        return view('todo.show',compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToDo $toDo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ToDo $toDo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToDo $toDo)
    {
        //
    }
}
