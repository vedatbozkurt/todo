<?php
/*
 * @Author: @vedatbozkurt
 * @Email: info@wedat.org
 * @Date: 2020-12-07 19:57:09
 * @LastEditors: @vedatbozkurt
 * @LastEditTime: 2020-12-07 20:09:24
 */

namespace Wedat\Todo\Console;

use Illuminate\Console\Command;

class InstallTodoPackage extends Command
{
    protected $signature = 'todo:install';

    protected $description = 'Install the todo package';

    public function handle()
    {
        $this->info('Installing todo package...');

        $this->info('Publishing configuration...');
        // config dosyasını yayınlamak için command
        // normalde yayınlamak istersen;
        // php artisan vendor:publish --provider="Wedat\Todo\TodoServiceProvider" --tag="config"
        $this->call('vendor:publish', [
            '--provider' => "Wedat\Todo\TodoServiceProvider",
            '--tag' => "config"
        ]);

        $this->info('Installed Todo Package');
    }
}
