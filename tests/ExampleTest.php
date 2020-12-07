<?php

namespace Wedat\Todo\Tests;

use Orchestra\Testbench\TestCase;
use Wedat\Todo\TodoServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TodoServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
