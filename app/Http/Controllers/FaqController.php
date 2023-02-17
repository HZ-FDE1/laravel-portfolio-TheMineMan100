<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

    public function store()
    {
        $faq = new Faq();
        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');
        $faq->save();

        redirect('/faqs');
    }

    public function show(Faq $faq)
    {

    }

    public function edit($id)
    {
        $faq = Faq::find($id);

        return view('faqs.edit', compact('faq'));
    }

    public function update($id)
    {
        $faq = Faq::find($id);

        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');
        $faq->save();

        return redirect('/faqs');
    }

    public function destroy($id)
    {
        $faq = Faq::find($id);

        $faq->delete();

        return redirect('/faqs');
    }
}
