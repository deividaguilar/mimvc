<?php


use PHPUnit\Framework\TestCase;
use App\controllers\Home;

class HomeTest extends TestCase{

    public function testIndex(){
        $home = new Home;
        $this->assertTrue(true);
    }
}
