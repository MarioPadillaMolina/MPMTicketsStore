<?php

namespace App\Http\Controllers;

//use App\Models\Ticket;
use App\Classes\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class BackendTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array = [  'openTicket' => 'menu-open', 
                    'viewOpenTicket' => 'active'
                    ];
            
        return view('backend.ticket.index', $array, Ticket::$tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //form create
    {
        $array = [  'openTicket' => 'menu-open', 
                    'viewCreateTicket' => 'active'
                    ];
        return view('backend.ticket.create', $array);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //añade datos del form create
    {   
        $response = ['op' => 'store'];
        return redirect('backend/ticket')->with($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (isset(Ticket::$tickets['tickets'][$id])) {
            $datos = Ticket::$tickets['tickets'][$id];
            return view('backend.ticket.show', $datos);
        } else {
            $response = ['op' => 'show'];
            return redirect('backend/ticket')->with($response);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = Ticket::$tickets['tickets'][$id];
        return view('backend.ticket.edit', $datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $response = ['op' => 'update'];
        return redirect('backend/ticket')->with($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = ['op' => 'delete', 'result' => 1, 'id' => $id];
        return redirect('backend/ticket')->with($response);
    }
}
