<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
		return view('welcome');
	}
	
	public function browse(){
		return view('browse');
	}
	
	public function about(){
		return view('about');
	}
	
	public function request(){
		return view('request');
	}
	
	public function login(){
		return view('login');
	}
}
