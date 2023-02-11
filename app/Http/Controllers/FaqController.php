<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function show()
    {
       return view('faq', [
            'faqs' => Faq::all()
        ]);
    }
}
