<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCategory() {
        $array = [
            'sience',
            'gatgets',
            'sport',
            'politics',
            'nature'
        ];
        return $array;
    }

    public function getNews()
    {
        $array = [
            'sience' =>
                [
                    [
                        'title' => 'На экзопланетах с водородными атмосферами может существовать жизнь',
                        'text' => ''
                    ],
                    [
                        'title' => '',
                        'text' => ''
                    ],
                    [
                        'title' => '',
                        'text' => ''
                    ],
                    [
                        'title' => '',
                        'text' => ''
                    ]
                ],
            'gatgets' =>
                [
                    [
                        'title' => '',
                        'text' => ''
                    ],
                    [
                        'title' => '',
                        'text' => ''
                    ],
                    [
                        'title' => '',
                        'text' => ''
                    ],
                    [
                        'title' => '',
                        'text' => ''
                    ]
                ],
            'sport' =>
                [

                ],
            'politics' =>
                [

                ],
            'nature' =>
                [

                ]
        ];
        return $array;
    }


}
