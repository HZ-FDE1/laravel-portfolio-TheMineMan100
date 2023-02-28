<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        return view('faqs.index', ['faqs' => Faq::all()]);
    }

    public function create()
    {
        return view('faqs.create');
    }

    public function store(Request $request)
    {
        Faq::create($this->validateFaq($request));

        redirect(route('faqs.index'));
    }

    public function show(Faq $faq)
    {

    }

    public function edit(Faq $faq)
    {
        return view('faqs.edit', compact('faq'));
    }

    public function update(Faq $faq, Request $request)
    {
        $faq->update($this->validateFaq($request));

        return redirect(route('faqs.index'));
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect(route('faqs.index'));
    }

    public function validateFaq(Request $request)
    {
        return $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
    }
}
