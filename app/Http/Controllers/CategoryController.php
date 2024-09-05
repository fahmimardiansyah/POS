<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function fnb()
    {
        return view ('foodbaverage')
        -> with('category', 'Food and Baverage');
    }

    public function bh()
    {
        return view ('beautyhealth')
        -> with('category', 'Beauty & Health');
    }

    public function homecare()
    {
        return view ('homecare')
        -> with('category', 'Home Care');
    }

    public function babykid()
    {
        return view ('babykid')
        -> with('category', 'Baby & Kid');
    }
}

