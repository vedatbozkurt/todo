<?php
/*
 * @Author: @vedatbozkurt
 * @Email: info@wedat.org
 * @Date: 2020-12-07 20:55:05
 * @LastEditors: @vedatbozkurt
 * @LastEditTime: 2020-12-07 21:21:49
 */
namespace Wedat\Todo\Database\Factories;

use Wedat\Todo\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    protected $model = Todo::class;

    public function definition()
    {
        return [
            'name'     => $this->faker->words(3, true),
            'description'      => $this->faker->paragraph,
        ];
    }
}
