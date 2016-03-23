<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Car;

class EduController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
            return view('edu.index');
    }

    public function show($id)
    {
        if ($id == "accomplishments") {
            return view('edu.accomplishments');
        } else if ($id == "transcript") {
            return view('edu.transcript');
        } else if ($id == "assignments") {
            return view('edu.assignments');
        } else {
            return view('error');
        }
    }
}