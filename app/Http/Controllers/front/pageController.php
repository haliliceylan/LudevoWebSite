<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ApplyForm;
class pageController extends Controller
{
	public function show_basvuru_formu(){
		return view('front.basvuru-formu');
	}

	public function post_basvuru_formu(Request $request){
		$form = new ApplyForm;
		$form->create($request->all()); //
		return redirect()->back();
	}
}
