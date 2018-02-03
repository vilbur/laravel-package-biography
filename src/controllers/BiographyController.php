<?php namespace Vilbur\Biography\Controllers;

use App\Http\Controllers\Controller;
use Vilbur\Biography\Models\Biography;

class BiographyController extends Controller {

    public function testView() {
		return \View::make('Biography::view');
   }
	/**
	*/
	public function getAllBiography()
	{
		return Biography::all()->toArray();
	}
}