<?php

namespace App\Http\Controllers\front;

use App\ApplyForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function show_basvuru_formu()
    {
        return view('front.basvuru-formu');
    }

    public function post_basvuru_formu(Request $request)
    {
        $form = new ApplyForm();
        $form->create($request->all()); //
        return redirect()->back();
    }
}
