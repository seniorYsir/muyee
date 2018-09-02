<?php
namespace App\Http\Controllers\Test;
use App\Http\Controllers\Controller;
class TestController extends Controller{
    public function test(){
        echo 'hello';
    }
    public function index(){
        return ['username' => '今晚打老虎',
            'level' => 'too high to count'
            ];
    }
}