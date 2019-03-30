<?php

namespace App\Http\Controllers;

use App\alumni;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

	public function index()
	{

		$allAlumni = alumni::all();

		return view('listall')->with('alumni', $allAlumni);

	}


	public function addStudent(Request $request)
	{

		$newStudent = new alumni();


		foreach ($request->all() as $key => $singleRequest) {

			if($key === '_token' || $singleRequest == null){
				continue;
			}

			$newStudent->$key = $singleRequest;
		}

		$newStudent->save();

		header("Location: /listall");
		die();
	}

	public function editStudent(Request $request)
	{

		alumni::where('id', $request->id)
			->update([
				'surname' => $request->surname,
				'name' => $request->name,
				'birthdate' => $request->birthdate,
				'handicapnumber' => $request->handicapnumber,
				'insurancenumber' => $request->insurancenumber,
				'socialsecuritycoverage' => $request->socialsecuritycoverage,
				'handicaptype' => $request->handicaptype,
				'handicapdegree' => $request->handicapdegree,
				'handicapcardenddate' => $request->handicapcardenddate,
				'insurancecardenddate' => $request->insurancecardenddate,
				'telephonenumber' => $request->telephonenumber,
				'identitycardnumber' => $request->identitycardnumber,
				'mothersname' => $request->mothersname,
				'fathersname' => $request->fathersname,
				'entrydate' => $request->entrydate,
				'exitdate' => $request->exitdate,
				'comment' => $request->comment
			]);


		header("Location: /listall");
		die();
	}

	public function deleteStudent($id)
	{

		alumni::where('id', $id)->delete();

		header("Location: /listall");
		die();
	}

}
