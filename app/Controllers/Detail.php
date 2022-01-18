<?php

namespace App\Controllers;

class Detail extends BaseController
{
    public function index($judul_artikel='')
    {
        $data = [
            'title'=>'Artikel '.$judul_artikel,
            'is_detail'=>'YES'
        ];

        return view('Page/detail',$data);
    }

    
}
