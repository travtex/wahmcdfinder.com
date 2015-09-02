<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConstructionController extends Controller
{
	public function underConstruction() {
		return view('special.construction');
	}

	public function testPage() {
		return 'The Test Page';
	}
}
