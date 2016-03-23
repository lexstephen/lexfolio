<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Car;

class CapstoneController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
            return view('capstone.index');
    }

    public function show($id)
    {
        if ($id == "requirements") {
            return view('capstone.requirements');
        } else if ($id == "projectplan") {
            return view('capstone.projectplan');
        } else if ($id == "requirementsanalysisdesign") {
            return view('capstone.requirementsanalysisdesign');
        } else if ($id == "wireframes") {
            return view('capstone.wireframes');
        }  else if ($id == "reports") {
            return view('capstone.reports');
        }  else if ($id == "implementation") {
            return view('capstone.implementation');
        } else {
            return view('error');
            
        }
    }
}