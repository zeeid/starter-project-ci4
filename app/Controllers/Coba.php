<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "kontroler coba index";
    }

    public function about($nama='',$umur=''){
        echo "about $nama Umur: $umur";
    }

}
