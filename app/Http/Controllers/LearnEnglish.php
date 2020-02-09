<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnEnglish extends Controller
{
    public function __construct() {
    }

    public function getIndex() {
        return view('english.crazy_english');
    }

    public function note() {
        return view('english.note_english');
    }

    public function test() {
        return view('english.test_english');
    }
}