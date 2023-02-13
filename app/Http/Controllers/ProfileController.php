<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile', [
            'articles' => Article::take(3)->latest()->get()
        ]);
    }
}
