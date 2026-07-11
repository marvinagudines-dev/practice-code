<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string {
        $title = 'Homepage';

        return view('home', [
            'title' => $title
        ]);
    }

    public function about(): string {
        $title = 'About';

        return view('about', [
            'title' => $title
        ]);
    }

    public function login(): string {
        $title = 'Login';

        return view('login', [
            'title' => $title
        ]);
    }
}
