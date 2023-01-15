<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return '建物です';
    }
    public function room($text)
    {
        return "部屋番号は" . $text . "です";
    }
}
