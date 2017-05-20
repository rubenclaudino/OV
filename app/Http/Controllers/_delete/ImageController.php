<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Guzzle\Tests\Plugin\Redirect;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller {

	public function upload()
	{
		return view('imageupload');
	}

	public function store(){
		// Store records process
   	}

	public function show(){
		// Show lists of the images
    }

}
