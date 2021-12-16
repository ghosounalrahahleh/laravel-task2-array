<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class arrayController extends Controller
{
    public function show()
    {
        $arr = [
            [
                'name'   => 'Home',
                "number" => '1'
            ],

            [
                'name'   => 'shop',
                "number" => '2'
            ],
            [
                'name'   => 'cart',
                "number" => '3'
            ],
            [
                'name'   => 'About us',
                "number" => '4'
            ],
            [
                'name'   => 'Contact Us',
                "number" => '5'
            ]
        ];
        return view('array')->with('p', $arr);
    }
}
