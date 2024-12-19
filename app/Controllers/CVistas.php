<?php

namespace App\Controllers;

class CVistas extends BaseController
{
    public function MMostrar1(): string
    {
        return view('Carpeta1/Index1');
    }
}