<?php

namespace App\Controllers;

class Rumah extends BaseController
{
    public function index()
    {
        $data = [
            'title'=>'HOME'
        ];

        return view('Page/home',$data);
    }

    
}
