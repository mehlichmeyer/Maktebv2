<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumni extends Model
{

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'alumni';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'surname',
		'name',
		'birthdate',
		'handicapnumber',
		'insurancenumber',
		'socialsecuritycoverage',
		'handicaptype',
		'handicapdegree',
		'handicapcardenddate',
		'insurancecardenddate',
		'telephonenumber',
		'identitycardnumber',
		'mothersname',
		'fathersname',
		'entrydate',
		'exitdate',
		'comment'
	];

}
