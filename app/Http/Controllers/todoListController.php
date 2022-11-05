<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todoListController extends Controller
{
    function saveTodo(Request $request)
    {
        // business logic

        print_r($request-> all());

        return view('welcome');
    }
}
