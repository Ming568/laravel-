<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CateController extends Controller
{
     public function show()
     {
     	return view('Admin.cate');
     }
	 public function addCate()
	 {
	 	return view('Admin.addCate');
	 }
	 
}
