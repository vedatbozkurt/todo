<?php
/*
 * @Author: @vedatbozkurt
 * @Email: info@wedat.org
 * @Date: 2020-12-07 20:35:57
 * @LastEditors: @vedatbozkurt
 * @LastEditTime: 2020-12-07 23:20:48
 */

namespace Wedat\Todo\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','description'
       ];
    
    protected $guarded = [];
}
