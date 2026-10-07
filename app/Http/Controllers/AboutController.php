<?php

namespace App\Http\Controllers;

use App\Models\experiences;
use App\Models\Skill;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about', [
            'skills' => Skill::all()->groupBy('category'),
            'experiences' => experiences::orderByDesc('start_date')->get()
        ]);
    }
}
