<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $personalInfo = [
            'name' => 'Hanag',
            'address' => 'Pokhara'
        ];

        return view('Home', [
            'details' => $personalInfo,
            'image' => asset('/nanu.JPG')
        ]);
    }

    public function contact()
    {
        $contactInfo = [
            'address' => 'Pokhara',
            'phone_number' => '1234567890'
        ];

        return view('Contact', [
            'contact' => $contactInfo
        ]);
    }

    public function about()
    {
        $gitLink = 'https://github.com/ApsaraGC/ApsaraGC';
        $socialLinks = [
            'instagram' => 'https://www.instagram.com/hanagslifestyle/', // Instagram link
            'youtube' => 'https://www.youtube.com/@hanagslifestyle' // YouTube link
        ];

        return view('About', [
            'link' => $gitLink,
            'social_links' => $socialLinks
        ]);
    }
}
