<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return view('Front-End.Register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'username'=>'required',
            'email' => 'required|email:dns',
            'password' => 'required|max:20',
      ]);
      
      user::create($validation);
      $request->session()->regenerate();
      return redirect()->intended('/Login');
    

    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //
    }
}
