<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class AboutController extends Controller
{
    public function about(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('about');
    }
}
