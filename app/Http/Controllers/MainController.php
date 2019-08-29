<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        $urlData = [
            array(
                'title' => 'FirstTitle',
                'url'   => 'http://firsttitle'
            ),
            array(
                'title' => 'SecondTitle',
                'url'   => 'http://secondtitle'
            )
        ];

        return view('main',[
            'urlData' => $urlData
        ]);
    }
}
