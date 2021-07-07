<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class MainController extends Controller
{
    public function itforit() {		
		$review = new Contact();
		return view('itforit', ['review' => $review->orderbydesc('id')->get()->all()]);
	}
	
	public function php() {		
		return view('php');
	}
	
	public function itforit_check(Request $request) {
		$valid = $request->validate([
			'email' => 'required|min:4|max:25',
			'subject' => 'required|min:4|max:50',
			'message' => 'required|min:4|max:150'
		]);
		
		$review = new Contact();
		$review->email = $request->input('email');
		$review->subject = $request->input('subject');
		$review->message = $request->input('message');
		
		$review->save();
		
		return redirect()->route('review');
	}
}
