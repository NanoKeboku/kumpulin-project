<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profiles.profileIndex');
    }

    public function reservasi()
    {
        return view('profiles.profileReservasi');
    }
}
