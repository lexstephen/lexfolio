@extends('layouts.master')

@section('title', 'Resumé')

@section('content')
    <h1>@yield('title')</h1>
    <p>A sample of my resume and cover letter can be found below.  You may also wish to check out my <a href="http://ca.linkedin.com/in/alexisstephen" target="new">LinkedIn profile</a>.</p>
    <div class="row noround">
        <a href="{{ URL::asset('docs/resume.pdf') }}"><img src="{{ URL::asset('images/resume.png') }}"></a>
        <a href="{{ URL::asset('docs/coverletter.pdf') }}"><img src="{{ URL::asset('images/coverletter.png') }}"></a>
    </div>
@endsection