<?php
/*
 * @Author: @vedatbozkurt
 * @Email: info@wedat.org
 * @Date: 2020-12-07 21:59:47
 * @LastEditors: @vedatbozkurt
 * @LastEditTime: 2020-12-07 22:46:29
 */

namespace Wedat\Todo\Http\Controllers;

use Wedat\Todo\Models\Todo as TodoModel;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = TodoModel::all();
        return view('todo::todo.index', compact('todos'));
    }

    public function show($todo)
    {
        $todo = TodoModel::findOrFail($todo);
        return view('todo::todo.show', compact('todo'));
    }

    public function create()
    {
        return view('todo::todo.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $form_data = array(
            'name'       =>   $request->name,
            'description'        =>   $request->description,
        );
        TodoModel::create($form_data);
        return redirect()->route('todos.index')->with('success', 'added successfully');
    }
}
