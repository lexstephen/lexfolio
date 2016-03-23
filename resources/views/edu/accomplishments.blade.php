@extends('layouts.master')

@section('title', 'Education and Awards')

@section('content')
    <h1>@yield('title')</h1>
    
    <h2>Computer Programmer Analyst Advanced Diploma</h2>
    <h3>George Brown College, 2013-2016 <small>3.99 cumulative GPA, Dean's Honours List</small></h3>
    
    <img src="{{ URL::asset('images/scholarship.jpg') }}" alt="2015 GBC Student Awards">
    <h2>GBC Michael Ludolph Memorial Scholarship</h2>
    <h3>Awarded April 2015 for outstanding academic achievement and community involvement.</h3>
    
    
@endsection