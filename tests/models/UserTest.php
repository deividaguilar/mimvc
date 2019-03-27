<?php

use PHPUnit\Framework\TestCase;
use App\models\User;

class UserTest extends TestCase
{
    public function testSomething()
    {
        $user = new User();
        $this->assertTrue($user->testMethod());
    }
}
