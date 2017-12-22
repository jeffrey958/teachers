<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
	public function index(){
		//return '顯示所有老師';
		$teachers_all = array('Seen','Mary','John','David', 'George');

		return view('teachers.list')->with('teachers', $teachers_all);

	}



}











?>