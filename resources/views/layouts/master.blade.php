<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet">
        <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="bs-component">
              <nav class="navbar">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Lex Stephen</a>
                  </div>

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                      <li class="dropdown">
                        <a href="<?php echo url('/'); ?>/abt" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Me <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="<?php echo url('/'); ?>/abt/bio">Biography</a></li>
                          <li class="divider"></li>
                          <li><a href="<?php echo url('/'); ?>/abt/philosophy">Philosophy</a></li>
                          <li class="divider"></li>
                          <li><a href="<?php echo url('/'); ?>/abt/resume">Resume & Cover Letter</a></li>
                        </ul>
                      </li>
                      
                      <li class="dropdown">
                        <a href="<?php echo url('/'); ?>/edu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Academic Credentials <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="<?php echo url('/'); ?>/edu/accomplishments">Education and Academic Awards</a></li>
                          <li><a href="<?php echo url('/'); ?>/edu/transcript">Transcript</a></li>
                          <li><a href="<?php echo url('/'); ?>/edu/assignments">Academic Work Samples</a></li>
                        </ul>
                      </li>
                      
                      <li class="dropdown">
                        <a href="<?php echo url('/'); ?>/capstone" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Capstone Project <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="<?php echo url('/'); ?>/capstone/requirements">Business Requirements</a></li>
                          <li><a href="<?php echo url('/'); ?>/capstone/projectplan">Project Plan</a></li>
                          <li><a href="<?php echo url('/'); ?>/capstone/requirementsanalysisdesign">Requirements Analysis and Design</a></li>
                          <li><a href="<?php echo url('/'); ?>/capstone/wireframes">Wireframes</a></li>
                          <li><a href="<?php echo url('/'); ?>/capstone/reports">Status Reports</a></li>
                          <li><a href="<?php echo url('/'); ?>/capstone/implementation">System Implementation</a></li>
                        </ul>
                      </li>
                      
                      <li class="dropdown">
                        <a href="<?php echo url('/'); ?>/exp" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Professional Summary <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="<?php echo url('/'); ?>/exp/samples">Work Samples</a></li>
                          <li><a href="<?php echo url('/'); ?>/exp/volunteering">Volunteering</a></li>
                          <li><a href="<?php echo url('/'); ?>/exp/endorsements">Letters of Recommendation</a></li>
                          <li><a href="<?php echo url('/'); ?>/exp/awards">Awards & Recognitions</a></li>
                        </ul>
                      </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="http://ca.linkedin.com/in/alexisstephen">LinkedIn</a></li>
                      <li><a href="http://https://github.com/lexstephen">GitHub</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
                
            <div class="row">
            
                <div class="col-xs-12 col-md-9 lexcontent">
                        @yield('content')
                </div>
                
                <div class="col-xs-12 col-md-3 lexsidebar">
                    @section('sidebar')
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Languages</h3>
                        </div>
                        <div class="panel-body">
                              <span class="label label-info">PHP</span> 
                                <span class="label label-success">CakePHP</span> 
                                <span class="label label-success">Laravel</span> 
                                <span class="label label-success">Blade</span> 
                              <span class="label label-info">Java</span> 
                                <span class="label label-success">JSP</span> 
                                <span class="label label-success">JSTL</span> 
                                <span class="label label-success">JSF</span> 
                              <span class="label label-info">JavaScript</span> 
                                <span class="label label-success">jQuery</span> 
                                <span class="label label-success">Node</span> 
                                <span class="label label-success">Angular</span> 
                                <span class="label label-success">Express</span> 
                                <span class="label label-success">Jade</span> 
                              <span class="label label-info">HTML5</span> 
                              <span class="label label-info">CSS</span> 
                                <span class="label label-success">Bootstrap</span> 
                                <span class="label label-success">LESS</span> 
                              <span class="label label-info">XML</span> 
                              <span class="label label-info">C#</span> 
                                <span class="label label-success">ASP.NET</span> 
                              <span class="label label-info">SQL</span> 
                              <span class="label label-info">PL/SQL</span> 
                        </div>
                    </div>
                    
                    
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tools & Skills</h3>
                        </div>
                        <div class="panel-body">
                            <div class="list-group">
                              <span class="label label-info">IDEs</span>
                                <span class="label label-success">Eclipse</span>
                                <span class="label label-success">Visual Studio</span>
                                <span class="label label-success">JDeveloper</span>
                                <span class="label label-success">NetBeans</span>
                                <span class="label label-success">PHPStorm</span>
                                <span class="label label-success">Android Studio</span>
                                <span class="label label-success">XCode</span>
                                <span class="label label-success">Notepad</span>
                                
                              <span class="label label-info">Databases</span>
                                <span class="label label-success">MySQL</span>
                                <span class="label label-success">Oracle XE</span>
                                <span class="label label-success">SQL Server</span>
                                <span class="label label-success">SQLite</span>
                                
                              <span class="label label-info">Servers</span>
                                <span class="label label-success">Apache</span>
                                <span class="label label-success">IIS</span>
                                
                              <span class="label label-info">Design</span>
                                <span class="label label-success">Adobe Photoshop</span>
                                <span class="label label-success">Adobe Illustrator</span>
                                <span class="label label-success">Adobe InDesign</span>
                                
                              <span class="label label-info">Analysis</span>
                              <span class="label label-success">System Analysis</span> 
                              <span class="label label-success">System Design</span> 
                              <span class="label label-success">UML</span> 
                              <span class="label label-success">Business Intelligence</span> 
                            </div>                          
                        </div>
                    </div>
                    @show
                </div>
                
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    </body>
</html>