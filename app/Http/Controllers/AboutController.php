<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Car;

class AboutController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
            return view('about.index');
    }

    public function show($id)
    {
        if ($id == "bio") {
            return view('about.bio');
        } else if ($id == "philosophy") {
            return view('about.philosophy');
        } else if ($id == "resume") {
            return view('about.resume');
        } else if ($id == "coverletter") {
            return view('about.coverletter');
        } else {
            return view('error');
            
        }
    }
}