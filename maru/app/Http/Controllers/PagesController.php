<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
		return view('welcome');
	}
	
	public function brose(){
		return view('welcome');
	}
	
	public function about(){
		return view('welcome');
	}
	
	public function request(){
		return view('welcome');
	}
	
	public function login(){
		return view('welcome');
	}
}
