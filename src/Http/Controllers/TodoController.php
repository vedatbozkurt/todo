<?php
/*
 * @Author: @vedatbozkurt
 * @Email: info@wedat.org
 * @Date: 2020-12-07 21:59:47
 * @LastEditors: @vedatbozkurt
 * @LastEditTime: 2020-12-07 22:03:35
 */

namespace Wedat\Todo\Http\Controllers;

use Wedat\Todo\Models\Todo as TodoModel;

class TodoController extends Controller
{
    public function index()
    {
        $form_data = array(
            'name'       =>   'test name from controller',
            'description'        =>   'test description from controller',
        );
        TodoModel::create($form_data);
        return 'added successfully';
    }

    public function show()
    {
        //
    }

    public function store()
    {
        // to create a new todo
    }
}
