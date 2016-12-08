<?php
  include 'includes/functions.php';
?>
<html>
  <head>
    <title>Peter Lorei</title>
    <?php
      getStyles();
    ?>
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One|Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="#" data-activates="mobile-demo" class="button-collapse">
          <i class="material-icons">
            menu
          </i>
        </a>
        <ul class="left hide-on-med-and-down">
          <?php
            getNavLinks();
          ?>
        </ul>
        <ul class="right right-nav">
          <li id="my-name">
            Peter Lorei
          </li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <?php
            getNavLinks();
          ?>
        </ul>
      </div>
    </nav>
  </div>
  <div class="welcome">
    <div class="transbox">
      <p class="welcome-text">
        Peter Lorei
      </p>
    </div>
  </div>
  <div class="section white">
    <div class="row container">
      <h5 class="header">About Me</h2>
      <p class="grey-text text-darken-3 lighten-3">
        I study computer science at the University of Pittsburgh, and am currently a senior. I am the second oldest of five children, all raised in Philadelphia by my awesome parents.
      </p>
    </div>
  </div>
  <div class="caption" id="family-caption">
    <span class="caption-text">
      Augie's highschool graduation.
    </span>
    <br/>
    <span class="location">
      Philadelphia, PA
    </span>
  </div>
  <div class="parallax-container" id="family-container">
    <div class="parallax">
      <img id="family" src="img/Family.jpg">
    </div>
  </div>
  <div class="section white">
    <div class="row container">
      <h5 class="header">Programming</h2>
      <p class="grey-text text-darken-3 lighten-3">
        I have been developing software for the past 5 years.
        Pitt's CS curriculum heavily focuses on Java and C programming.
        I have two years of software engineering experience through the school's co-op program, and have also completed an internship at an electrical/computer engineering company in Pittsburgh.
      </p>
      <p class="grey-text text-darken-3 lighten-3">
        Outside of school most of my experience is in web-development, and I really enjoy working on both back end code and web front ends.
        I currently work as the web developer for the school newspaper: <a href="http://www.pittnews.com" target="_blank">The Pitt News</a> and am developing a music blog: <a href="http://www.juiceboxfresh.us" target="_blank">JuiceBox</a>.
      </p>
    </div>
    <div class="row container">
      <ul class="collapsible popout" data-collapsible="accordion">
        <li>
          <div class="collapsible-header">
            <i class="material-icons">code</i>
            Languages
          </div>
          <div class="collapsible-body">
            <div class="chip">
              Java
            </div>
            <div class="chip">
              C#
            </div>
            <div class="chip">
              C/C++
            </div>
            <div class="chip">
              PHP
            </div>
            <div class="chip">
              HTML
            </div>
            <div class="chip">
              CSS
            </div>
            <div class="chip">
              JavaScript
            </div>
            <div class="chip">
              TypeScript
            </div>
            <div class="chip">
              jQuery
            </div>
            <div class="chip">
              SQL
            </div>
            <div class="chip">
              Python
            </div>
            <div class="chip">
              MIPS
            </div>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">laptop_mac</i>
            Experience
          </div>
          <div class="collapsible-body">
            <div class="chip">
              ASP .NET
            </div>
            <div class="chip">
              NodeJS
            </div>
            <div class="chip">
              Angular2
            </div>
            <div class="chip">
              Parse
            </div>
            <div class="chip">
              LINQ
            </div>
            <div class="chip">
              Selenium
            </div>
            <div class="chip">
              Wordpress
            </div>
            <div class="chip">
              MVC
            </div>
            <div class="chip">
              Git
            </div>
            <div class="chip">
              TFS
            </div>
            <div class="chip">
              VMWare
            </div>
            <div class="chip">
              Material Design
            </div>
            <div class="chip">
              vPython
            </div>
            <div class="chip">
              Device Drivers
            </div>
            <div class="chip">
              Unix/OSX
            </div>
            <div class="chip">
              Responsive Design
            </div>
            <div class="chip">
              LabVIEW
            </div>
            <div class="chip">
              MATLAB
            </div>
            <div class="chip">
              Excel
            </div>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">school</i>
            Coursework
          </div>
          <div class="collapsible-body">
            <div class="chip">
              Web Applications
            </div>
            <div class="chip">
              Algorithms
            </div>
            <div class="chip">
              Data Structures
            </div>
            <div class="chip">
              DB Management
            </div>
            <div class="chip">
              Compiler Design
            </div>
            <div class="chip">
              Hi-Performance Systems
            </div>
            <div class="chip">
              Operating Systems
            </div>
            <div class="chip">
              Computer Architecture
            </div>
            <div class="chip">
              Computer Organization
            </div>
            <div class="chip">
              Assembly Language
            </div>
            <div class="chip">
              Systems Software
            </div>
            <div class="chip">
              Formal Methods
            </div>
            <div class="chip">
              Discrete Math
            </div>
            <div class="chip">
              Statistics
            </div>
            <div class="chip">
              Calculus I/II
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="caption" id="raft-caption">
    <span class="caption-text">
    Rafting the Lower Youghiogheny.
    </span>
    <br/>
    <span class="location">
      Ohiopyle, PA
    </span>
  </div>
  <div class="parallax-container" id="raft-container">
    <div class="parallax">
      <img class="parallax-img" id="raft" src="img/Raft.jpg">
    </div>
  </div>
  <div class="section white">
    <div class="row container">
      <h5 class="header">Other Interests</h2>
      <p class="grey-text text-darken-3 lighten-3">
        I don't think it's healthy to spend all my time staring at code, so I like to get outdoors and hike, raft or kayak when the weather is nice.
        People close to me will tell you that I am super competitive; I play (and watch) basketball at least a few times a week and tennis whenever the weather permits.
        I am also really passionate about music, I listen to a wide range of artists and love concerts.
        In my spare time, I produce music on Apple's Logic Pro X, and write shell scripts to make my life easier (i.e. Map drum samples to pads on midi controller) when possible.
      </p>
    </div>
  </div>


  <!-- Closing the main container -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>
          © 2016 Copyright Peter Lorei for CS1520
        </span>
      </div>
    </div>
  </footer>
  <?php
    getScripts();
  ?>
</body>

</html>
