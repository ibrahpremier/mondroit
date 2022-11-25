<?php

namespace App\Helpers;
use Carbon\Carbon;
use App\Models\Mandat;
use App\Models\Reglage;
use Illuminate\Support\Facades\Auth;

class GlobalHelpers
{
    public static function formatDate(string $date)
    {
        $annee = substr($date,0,4);
        $mois = substr($date,4,2);
        $jour = substr($date,6,2);
        return $jour.'/'.$mois.'/'.$annee;
    }

     function formatDate2(string $date)
    {
        $annee = substr($date,0,4);
        $mois = substr($date,4,2);
        return $mois.'/'.$annee;
    }


    public static function getLoggedUser()
    {
        if(Auth::user()){
            return Auth::user()->getUser();
        }
        return null;
    }



     function getToday()
    {
        return Carbon::now()->format('Y/m/d');
    }

     public static function getMandat()
    {
        //Creation automatique du mandat en cours si innexistant
        // $mois = intval(Carbon::now()->format('m'));
        // if($mois>6){
        //     $mandat = Mandat::where('annee_debut',intval(Carbon::now()->format('Y')))->first();
        //     if(!$mandat){
        //        $mandat = Mandat::create([
        //             "annee_debut"=>intval(Carbon::now()->format('Y')),
        //             "annee_fin"=>intval(Carbon::now()->format('Y'))+1
        //         ]);
            
        //     }
        // } else {
        //         $mandat = Mandat::where('annee_debut',intval(Carbon::now()->format('Y'))-1)->first();
        //         if(!$mandat){
        //         $mandat = Mandat::create([
        //                 "annee_debut"=>intval(Carbon::now()->format('Y')),
        //                 "annee_fin"=>intval(Carbon::now()->format('Y'))+1
        //             ]);
        //     }
        // } 

        $reglage = Reglage::first();
        $mandat = null;
        if($reglage){
            $mandat = Mandat::find($reglage->mandat_actif);
        };
        return $mandat;
    }


}