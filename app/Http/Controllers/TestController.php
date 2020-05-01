<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testAction() {
        echo "This is test controller TestController";
    }

    public function testActionName($name, $lastname) {
        echo "Hello {$name} {$lastname}!";
    }
}
