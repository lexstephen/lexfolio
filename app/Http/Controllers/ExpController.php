<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Car;

class ExpController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
            return view('exp.index');
    }

    public function show($id)
    {
        if ($id == "samples") {
            return view('exp.samples');
        } else if ($id == "volunteering") {
            return view('exp.volunteering');
        } else if ($id == "endorsements") {
            return view('exp.endorsements');
        } else if ($id == "awards") {
            return view('exp.awards');
        } else {
            return view('error');
        }
    }
}