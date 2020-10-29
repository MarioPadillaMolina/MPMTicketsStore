<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Ticket; //clase ticket

class IndexController extends Controller
{
    function index()
    {
        return view('index', Ticket::$tickets);
    }

    function fallback()
    {
        $response = ['op' => 'fallback'];
        return redirect('/')->with($response);
    }
}
