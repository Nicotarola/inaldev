<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    
    function contacto()
    {
        return view("contact");
    }

}
