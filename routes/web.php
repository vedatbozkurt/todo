<?php
/*
 * @Author: @vedatbozkurt
 * @Email: info@wedat.org
 * @Date: 2020-12-07 21:30:55
 * @LastEditors: @vedatbozkurt
 * @LastEditTime: 2020-12-07 22:03:16
 */
use Illuminate\Support\Facades\Route;
use Wedat\Todo\Http\Controllers\TodoController;

Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todos.show');
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
