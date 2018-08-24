<?php

namespace App\Http\Controllers;

use App\alumni;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

	public function index()
	{

		$allAlumni = alumni::all();

		return view('index')->with('alumni', $allAlumni);

	}


	public function addStudent(Request $request)
	{

		$newStudent = new alumni();

		$newStudent->surname = $request->surname;
		$newStudent->name = $request->name;
		$newStudent->status = $request->status;

		$newStudent->save();

		header("Location: /");
		die();
	}

	public function editStudent(Request $request)
	{

		alumni::where('id', $request->id)
			->update([
				'surname' => $request->surname,
				'name' => $request->name,
				'status' => $request->status,
			]);


		header("Location: /");
		die();
	}

	public function deleteStudent($id)
	{

		alumni::where('id', $id)->delete();

		header("Location: /");
		die();
	}

}
