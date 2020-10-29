<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Ticket; //clase ticket

class TicketController extends Controller
{
    function index()
    {
        return view('ticket.index', Ticket::$tickets);
    }

    function show($id)
    {
        if (isset(Ticket::$tickets['tickets'][$id])) {
            $datos = Ticket::$tickets['tickets'][$id];
            return view('ticket.show', $datos);
        }
    }
}
