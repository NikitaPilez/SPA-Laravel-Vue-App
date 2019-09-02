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

    public function getJson(){
        $urlData = [
            array(
                'title' => 'FirstTitle',
                'url'   => 'http://firsttitle'
            ),
            array(
                'title' => 'SecondTitle',
                'url'   => 'http://secondtitle'
            ),
            array(
                'title' => 'SecondTitle',
                'url'   => 'http://secondtitle'
            )
        ];

        return $urlData;
    }

    public function chartData(){
        return [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            'datasets' => array([
                'label' => 'Vue chart JS',
                'backgroundColor' => '#5A009D',
                'data' => [40, 20, 12, 39, 10, 40, 39, 80, 40, 20, 12, 11],
            ])
        ];
    }
}
