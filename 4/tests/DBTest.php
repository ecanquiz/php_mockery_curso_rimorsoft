<?php

use \PHPUnit\Framework\TestCase;
use \App\DB;

class DBTest extends TestCase
{
    public function test_withot_mockery()
    {
        $db = new DB;

        $this->assertTrue($db->get('users'));
    }
    
}


