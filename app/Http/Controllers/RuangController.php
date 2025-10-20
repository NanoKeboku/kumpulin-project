<?php

namespace App\Http\Controllers;

class RuangController extends Controller
{
    public function index()
    {
        DB::table()->insert([
            'nama_tempat',
        ]);
    }
}
