<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected $links = [];
    protected $categories = [
        'sience',
        'gatgets',
        'sport',
        'politics',
        'nature'
    ];

    protected $news = [
        'sience' =>
            [
                [
                    'title' => 'На экзопланетах с водородными атмосферами может существовать жизнь',
                    'text' => '',
                    'date' => 123123
                ],
                [
                    'title' => 'fghfgh',
                    'text' => '',
                    'date' => 123124

                ],
                [
                    'title' => 'dfgdfg',
                    'text' => '',
                    'date' => 123126
                ],
                [
                    'title' => 'dfggdfgf',
                    'text' => '',
                    'date' => 123130
                ]
            ],
        'gatgets' =>
            [
                [
                    'title' => '',
                    'text' => '',
                    'date' => 123125
                ],
                [
                    'title' => '',
                    'text' => '',
                    'date' => 123127
                ],
                [
                    'title' => '',
                    'text' => '',
                    'date' => 123128
                ],
                [
                    'title' => '',
                    'text' => '',
                    'date' => 123129
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

    public function __construct()
    {

       //View::share('main', 'main');
    }


    public function getCategory() {
        return $this->categories;
    }

    public function getNews()
    {
        return $this->news;
    }

    public function getLinks() {
        $this->links = $this->categories;
        return $this->links;
    }


}
