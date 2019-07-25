<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\About;


class DefaultController extends Controller
{
    public function index()
    {
        return view('index', [
            'about' => About::find(1),
            'experience' => Experience::All(),
            'skills' => Skill::All(),
        ]);
    }
}
