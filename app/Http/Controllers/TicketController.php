<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalHelpers;
use App\Models\Organisation;
use App\Models\Ticket;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $partenaire = null;
        $q = $request->input('q');
        $p = $request->input('p');
        if($p){
            $partenaire = Organisation::findOrFail($p);
        }
        return view('new-ticket',compact('q','partenaire'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FlasherInterface $flasher)
    {
        $request->validate([
            'objet' => 'required',
            'msg' => 'required',
        ]);

        $ticket = Ticket::create([
            'objet' => $request->input('objet'),
            'message' => $request->input('msg'),
            'type' => $request->input('type'),
            'user_id' => GlobalHelpers::getLoggedUser()->id,
            'target_user_id' => $request->input('target_user_id'),
        ]);

      $flasher->addSuccess('Votre requête à été prise en compte');

      return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
