@extends('layouts.master') 
@section('title', 'Transcript') 
@section('content')
  <h1>@yield('title')</h1>
  <p>If you were wondering, yes: that single A- really is a thorn in my side.  So close to a 4.0!</p>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Term</th>
        <th>Season</th>
        <th>Course</th>
        <th>Title</th>
        <th>Grade</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td><td>2013-Fall</td>
        <td>COMM 1007</td>
        <td>COLLEGE ENGLISH</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>1</td><td>2013-Fall</td>
        <td>COMP 1151</td>
        <td>COMPUTER HARDWARE FUNDAMENTALS</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>1</td><td>2013-Fall</td>
        <td>COMP 1176</td>
        <td>ESSENTIAL NETWORKING TECHN. I</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>1</td><td>2013-Fall</td>
        <td>COMP 1223</td>
        <td>WEB DEVELOPMENT FUNDAMENTALS</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>1</td><td>2013-Fall</td>
        <td>COMP 1228</td>
        <td>INTRO TO OFFICE APPLICATIONS</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>1</td><td>2013-Fall</td>
        <td>GSSC 1045</td>
        <td>BUS APPL. FOR INFO. TECHNOLOGY</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>1</td><td>2013-Fall</td>
        <td>MATH 1071</td>
        <td>MATHEMATICS FOR IT/ME</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>2</td><td>2014-Winter</td>
        <td>COMP 1165</td>
        <td>DESKTOP S/W INST.&amp; SUPPORT</td>
        <td>A</td>
      </tr>
      <tr>
        <td>2</td><td>2014-Winter</td>
        <td>COMP 1168</td>
        <td>DATABASE MANAGEMENT</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>2</td><td>2014-Winter</td>
        <td>COMP 1202</td>
        <td>OBJECT ORIENTED PROGRAMMING</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>2</td><td>2014-Winter</td>
        <td>COMP 1231</td>
        <td>WEB PROGRAMMING</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>2</td><td>2014-Winter</td>
        <td>GSSC 1027</td>
        <td>PERSONAL FINANCE</td>
        <td>A-</td>
      </tr>
      <tr>
        <td>2</td><td>2014-Winter</td>
        <td>MATH 1172</td>
        <td>MATH FOR COMPUTER TECHN'Y II</td>
        <td>A</td>
      </tr>
      <tr>
        <td>3</td><td>2014-Fall</td>
        <td>COMM 1034</td>
        <td>PROFESSIONAL COMMUNICATIONS I</td>
        <td>A</td>
      </tr>
      <tr>
        <td>3</td><td>2014-Fall</td>
        <td>COMP 1230</td>
        <td>ADVANCED WEB PROGRAMMING</td>
        <td>A</td>
      </tr>
      <tr>
        <td>3</td><td>2014-Fall</td>
        <td>COMP 2129</td>
        <td>ADV OBJECT-ORIENT.PROGRAMMING</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>3</td><td>2014-Fall</td>
        <td>COMP 2130</td>
        <td>APPLICATION DEVL.USING JAVA</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>3</td><td>2014-Fall</td>
        <td>COMP 3035</td>
        <td>SYSTEMS ANALYSIS</td>
        <td>A</td>
      </tr>
      <tr>
        <td>3</td><td>2014-Fall</td>
        <td>GSSC 1100</td>
        <td>SMALL BUSINESS PLAN &amp;OPERATION</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>4</td><td>2015-Winter</td>
        <td>COMM 1035</td>
        <td>PROFESSIONAL COMMUNICATION II</td>
        <td>A</td>
      </tr>
      <tr>
        <td>4</td><td>2015-Winter</td>
        <td>COMP 2080</td>
        <td>DATA STRUCTURES &amp; ALGORITHMS</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>4</td><td>2015-Winter</td>
        <td>COMP 2120</td>
        <td>SYSTEMS DESIGN</td>
        <td>A</td>
      </tr>
      <tr>
        <td>4</td><td>2015-Winter</td>
        <td>COMP 2138</td>
        <td>ADVANCED DATABASE DEVELOPMENT</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>4</td><td>2015-Winter</td>
        <td>COMP 2139</td>
        <td>WEB APPLICATION DEVELOPMENT</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>4</td><td>2015-Winter</td>
        <td>GSSC 1058</td>
        <td>INTRODUCTION TO PSYCHOLOGY</td>
        <td>A</td>
      </tr>
      <tr>
        <td>5</td><td>2015-Fall</td>
        <td>COMP 3059</td>
        <td>CAPSTONE PROJECT I</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>5</td><td>2015-Fall</td>
        <td>COMP 3061</td>
        <td>COMPUTER SECURITY FUNDAMENTALS</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>5</td><td>2015-Fall</td>
        <td>COMP 3064</td>
        <td>GAME DEVELOPMENT</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>5</td><td>2015-Fall</td>
        <td>COMP 3074</td>
        <td>MOBILE APPL. DEVELOPMENT I</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>5</td><td>2015-Fall</td>
        <td>COMP 3075</td>
        <td>REPORT DESIGN &amp; IMPLEMENTATION</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>5</td><td>2015-Fall</td>
        <td>COMP 3095</td>
        <td>WEB APPL DEVELOP.USING JAVA</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>6</td><td>2016-Winter</td>
        <td>COMP 3060</td>
        <td>LINUX FUNDAMENTALS</td>
        <td>TBD</td>
      </tr>
      <tr>
        <td>6</td><td>2016-Winter</td>
        <td>COMP 3065</td>
        <td>BUSINESS INTELLIGENCE</td>
        <td>TBD</td>
      </tr>
      <tr>
        <td>6</td><td>2016-Winter</td>
        <td>COMP 3078</td>
        <td>CAPSTONE PROJECT II</td>
        <td>TBD</td>
      </tr>
      <tr>
        <td>6</td><td>2016-Winter</td>
        <td>COMP 3080</td>
        <td>EMERGING TECHNOLOGIES</td>
        <td>TBD</td>
      </tr>
      <tr>
        <td>6</td><td>2016-Winter</td>
        <td>COMP 3097</td>
        <td>MOBILE APPLICATION DEVELOP. II</td>
        <td>TBD</td>
      </tr>
    </tbody>
  </table>
@endsection