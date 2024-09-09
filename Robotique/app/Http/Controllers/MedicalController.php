<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function m()
    {
        return view('medical');
    }
    public function agroalimentaire()
    {
        return view('agroalimentaire');
    }
    public function automobile()
    {
        return view('automobile');
    }
    public function electronique()
    {
        return view('electronique');
    }
    public function energie()
    {
        return view('energie');
    }
}
