<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function showPage(): View
    {
        $data = [
            'Carlos' => [
                'Português',
                'Inglês'
            ],
            'Mario' => [
                'Português',
                'Espanhol'
            ],
            'Carolina' => [
                'Português',
                'Inglês',
                'Francês'
            ]
        ];

        return view('home', ['pessoas_linguas' => $data]);
    }
}
