<?php
/*
 * @Author: @vedatbozkurt
 * @Email: info@wedat.org
 * @Date: 2020-12-07 21:30:55
 * @LastEditors: @vedatbozkurt
 * @LastEditTime: 2020-12-07 21:30:55
 */
use Illuminate\Support\Facades\Route;
use Wedat\Todo\Models\Todo as TodoModel;

Route::get('/create', function () {
    $form_data = array(
        'name'       =>   'test name',
        'description'        =>   'test description from route',
    );
    TodoModel::create($form_data);
    return 'added successfully';
});
