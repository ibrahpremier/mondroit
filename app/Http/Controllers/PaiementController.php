<?php

namespace App\Http\Controllers;

use App\Models\paiement;
use App\Models\TypeCompte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_compte = TypeCompte::where('short_name',Auth::user()->getUser()->type_compte)->first();
        return view('paiement',compact('type_compte'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function show(paiement $paiement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function edit(paiement $paiement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paiement $paiement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function destroy(paiement $paiement)
    {
        //
    }
}
