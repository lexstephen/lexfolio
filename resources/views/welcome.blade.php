@extends('layouts.master')

@section('title', 'Lex Stephen')

@section('sidebar')

    <p>This is prepended to the master sidebar.</p>
    @parent
@endsection

@section('content')
    <div class="col-xs-12 col-md-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Who?</h3>
            </div>
            <div class="panel-body">
                <img src="https://kaynou.files.wordpress.com/2011/05/grammargirlavatar.jpg" alt="Me IRL">
                <p>I'm a developer from Toronto, about to graduate with a Computer Programmer Analyst diploma from George Brown college.</p>
            </div>
        </div>
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">The Corporate Years</h3>
            </div>
            <div class="panel-body">
                <p>Something about my previous professional life</p>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">The Early Years</h3>
            </div>
            <div class="panel-body">
                <p>I started working on my first website the night I got an Internet connection.  It was on Geocities - before the popups were introduced.  It had a nested frame design so complex I had to draw it out on paper just to figure out how I could build it.  It was the 90s.. we didn't know better.  Perhaps, charitably, you could think of it as a proto-Bootstrap Grid system?</p>
                <p>Something about my template site Something about my template site Something about my template site Something about my template site Something about my template site Something about my template site Something about my template site Something about my template site Something about my template site Something about my template site</p>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">The Student Years</h3>
            </div>
            <div class="panel-body">
                <p>Here are many more words! I talk here about projects, you see?</p>
            </div>
        </div>
    </div>
@endsection