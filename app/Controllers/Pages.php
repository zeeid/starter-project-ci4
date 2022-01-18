<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title'=>'PAGE HOME'
        ];
        
        echo view('Page/home',$data);
    }
    
    public function about(){
        return view('Page/about');
    }

}
