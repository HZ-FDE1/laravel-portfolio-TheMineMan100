<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        return view('faq', [
            'faqs' => Faq::all()
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Faq $faq)
    {
        return view('faq', [
            'faqs' => Faq::all()
        ]);
    }

    public function edit(Faq $faq)
    {

    }

    public function update(Request $request, Faq $faq)
    {

    }

    public function destroy(Faq $faq)
    {

    }
}
