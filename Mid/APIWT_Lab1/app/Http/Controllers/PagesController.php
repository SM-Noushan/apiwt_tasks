<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('home');
    }

    public function service(){
        $services = [
            [
                'SL' => 1,
                'Name' => 'S-One',
                'Catagory' => 'A',
                'Price' => 'Tk 1999/-'
            ],
            [
                'SL' => 2,
                'Name' => 'S-Two',
                'Catagory' => 'B',
                'Price' => 'Tk 2999/-'
            ],
            [
                'SL' => 3,
                'Name' => 'S-Three',
                'Catagory' => 'C',
                'Price' => 'Tk 3999/-'
            ]
        ];
        return view('service', compact('services'));
    }

    public function our_team(){
        return view('our-team');
    }

    public function about_us(){
        return view('about-us');
    }

    public function contact_us(){
        return view('contact-us');
    }
}
