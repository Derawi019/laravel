<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        $slides = [
            [
                'image' => 'images/thumbs/featured/featured-03_2000.jpg',
                'title' => ' <span>sales</span>',
                'desc' => ' Quasi consequatur quia excepturi ullam velit. Repellat velit vel occaecati neque perspiciatis quibusdam nulla.
                Unde et earum. Nostrum nulla optio debitis odio modi. Quis autem possimus dolores est est fugiat saepe vel aut',
                'price' => '320.99',
                'link' => '#',
            ],
            [
                'image' => 'images/thumbs/featured/featured-03_2000.jpg',
                'title' => ' <span>sales</span>
                get the best offers',
                'desc' => ' Quasi consequatur quia excepturi ullam velit. Repellat velit vel occaecati neque perspiciatis quibusdam nulla.
                Unde et earum. Nostrum nulla optio debitis odio modi. Quis autem possimus dolores est est fugiat saepe vel aut',
                'price' => '220.99',
                'link' => '#',
            ],
            [
                'image' => 'images/thumbs/featured/featured-03_2000.jpg',
                'title' => ' <span>sales</span>
                get the best offers quickly',
                'desc' => ' Quasi consequatur quia excepturi ullam velit. Repellat velit vel occaecati neque perspiciatis quibusdam nulla.
                Unde et earum. Nostrum nulla optio debitis odio modi. Quis autem possimus dolores est est fugiat saepe vel aut',
                'price' => '130.99',
                'link' => '#',
            ],

        ];
        return view('front.index', [
            'title' => 'glory',
            'slides' => $slides,
        ]);
    }
    public function show($slug)
    {
        if (!View::exists("front.pages.$slug")) {
            abort(404);
        }
        return view("front.pages.$slug");
    }
}
