<?php

namespace App\Controllers;

class Service extends BaseController
{
	public function index()
	{
		// return view('home');
		echo view('templates/header');
		echo view('templates/banner');
		echo view('pages/services');
		echo view('templates/footer');
	}
}
