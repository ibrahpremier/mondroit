<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Flasher\Prime\FlasherInterface;

class UserController extends Controller
{
    /**
    * Handle an authentication attempt.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function login(Request $request, FlasherInterface $flasher)
   {
       $credentials = $request->validate([
           'phone' => ['required', 'numeric'],
           'password' => ['required'],
       ]);

       if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                if(Auth::user()->getUser()->active){
                    return redirect()->intended('/');
                } 
                return redirect()->route('paiement');
       }

       $flasher->addError('Les informations de connexions ne sont pas valides');

       return redirect()->back()->withErrors([
           'password' => 'Les details de connexions ne sont pas valides',
       ]);
    //    return redirect()->back()->withErrors('Les details de connexions ne sont pas valides');

   }

   function register(Request $request, FlasherInterface $flasher)
   {
       $request->validate([
           'nom' => 'required',
           'prenom' => 'required',
           'phone' => 'required|unique:users,phone,id',
           'email' => 'required|email|unique:users,email,id',
           'type' => 'required',
           'password' => 'required'
        ]);

       User::create([
        'nom' =>$request->nom,
        'prenom' =>$request->prenom,
        'phone' => $request->phone,
        'email' => $request->email,
        'type_compte' => $request->type,
        'password' => Hash::make($request->password),
      ]);
      $flasher->addSuccess('Votre compte à été créé');

    //   return redirect()->intended('login');

    return redirect()->route('paiement');
   }

   function disconnect(Request $request, FlasherInterface $flasher)
   {
    //    Helpers::SaveLog('Deconexion à GED',Auth::user()->id);
       Auth::logout();
       $request->session()->invalidate();
       $request->session()->regenerateToken();
       $flasher->addSuccess('Vous avez été déconnecté');
       return redirect('/login');
   }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
