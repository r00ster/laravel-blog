<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view('pages.welcome');
	}

	public function getAbout() {
		$first = 'Niel';
		$last = 'Roos';

		$full = $first . ' ' . $last;
		$email = 'nielroos@gmail.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $full;
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}

}
