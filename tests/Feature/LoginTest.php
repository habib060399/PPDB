<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
   
    public function AuthTest()
    {
        $login = $this->app->make(LoginController::class);

        self::assertEquals(true, $login->auth);
    }

}
