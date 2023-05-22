<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $languagesProg = array('C#','PHP','c++','JS');
        $languages = array('UA','EN','PL');
        return view('Test.index',array('p'=>$languagesProg,'l'=>$languages));
    }
}
