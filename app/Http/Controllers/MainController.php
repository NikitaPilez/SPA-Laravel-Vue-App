<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function searchForm()
    {
        return view('search');
    }

    public function getRandomString(){
        $values = [];
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $result = '';

        for($k = 0; $k < 20; $k++){
            for ($i = 0; $i < 10; $i++)
                $result .= $characters[mt_rand(0, 61)];
            array_push($values,$result);
            $result = '';
        }
        return $values;
    }

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

    public function chartDataPie(){
        return [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            'datasets' => array([
                'label' => 'Vue chart JS',
                'backgroundColor' => ['#008744','#196dae','#ff0000','#ff6f61','#9d3133','#ad3ace','#9d103a','#e000ee','#9785e3','#e0ab8a','#0a84a8','#5A009D'],
                'data' => [40, 20, 12, 39, 10, 40, 39, 80, 40, 20, 12, 11],
            ])
        ];
    }

    public function randomData()
    {
        return [
            'labels' => ['Winter', 'Spring', 'Summer', 'Autumn'],
            'datasets' => array([
                    'label' => 'Example 1',
                    'backgroundColor' => '#008744',
                    'data' => [rand(0,40000), rand(0,40000),rand(0,40000), rand(0,40000)],
                ],
                [
                    'label' => 'Example 2',
                    'backgroundColor' => '#196dae',
                    'data' => [rand(0,40000), rand(0,40000),rand(0,40000), rand(0,40000)],
                ]
            )
        ];
    }

    public function getTable()
    {
        $data = array(
            'id' => rand(0,100),
            'title' => 'Test '.rand(0,100),
            'description' => 'It is '. rand(0,100). 'th description!'
        );

        return $data;
    }
}
