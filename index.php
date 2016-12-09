<?php
  include 'includes/functions.php';
  include 'includes/header.php';
?>
<div class="page-wrapper">
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
  <div class="caption" id="familyCaption">
    <span class="caption-text">
      Augie's highschool graduation.
    </span>
    <br/>
    <span class="location">
      Philadelphia, PA
    </span>
  </div>
  <div class="parallax-container" id="familyContainer">
    <div class="parallax">
      <img id="family" src="img/Family.jpg">
    </div>
  </div>
  <div class="section white">
    <div class="row container">
      <h5 class="header">Programming</h2>
      <p class="grey-text text-darken-3 lighten-3">
        I have been developing software for the past 4 years.
        Pitt's CS curriculum heavily focuses on Java and C programming.
        I have two years of software engineering experience through the school's co-op program, and have also completed an internship at an electrical/computer engineering company in Pittsburgh.
      </p>
      <p class="grey-text text-darken-3 lighten-3">
        Outside of school most of my experience is in web-development, and I really enjoy working on both back end code and web front ends.
        I currently work as the web developer for the school newspaper: <a href="http://www.pittnews.com/virtual-reality" target="_blank">The Pitt News</a> and am developing a music blog: <a href="http://www.juiceboxfresh.us" target="_blank">JuiceBox</a>.
      </p>
    </div>
    <div class="row container">
      <ul class="collapsible popout" data-collapsible="accordion">
        <?php
          $chips = array(
            "Java",
            "C#",
            "C/C++",
            "PHP",
            "HTML",
            "CSS",
            "LESS/SASS",
            "JavaScript",
            "TypeScript",
            "jQuery",
            "SQL",
            "Python",
            "MIPS"
          );
          buildPopoutList("Languages", "code", $chips);

          $chips = array(
            "ASP .NET",
            "NodeJS",
            "Angular2",
            "Parse",
            "LINQ",
            "Selenium",
            "Wordpress",
            "MVC",
            "Git",
            "TFS",
            "VMWare",
            "Material Design",
            "vPython",
            "Device Drivers",
            "Unix/OSX",
            "Responsive Design",
            "LabVIEW",
            "MATLAB",
            "Excel"
          );
          buildPopoutList("Experience", "laptop_mac", $chips);

          $chips = array(
            "Web Applications",
            "Algorithms",
            "Data Structures",
            "DB Management",
            "Compiler Design",
            "Hi-Performance Systems",
            "Operating Systems",
            "Computer Architecture",
            "Computer Organization",
            "Assembly Language",
            "Systems Software",
            "Formal Methods",
            "Discrete Math",
            "Statistics",
            "Calculus I/II"
          );
          buildPopoutList("Coursework", "school", $chips);
        ?>
      </ul>
    </div>
  </div>
  <div class="caption" id="raftCaption">
    <span class="caption-text">
      Rafting the Lower Youghiogheny.
    </span>
    <br/>
    <span class="location">
      Ohiopyle, PA
    </span>
  </div>
  <div class="parallax-container" id="raftContainer">
    <div class="parallax">
      <img class="parallax-img" id="raft" src="img/Raft.jpg">
    </div>
  </div>
  <div class="section white">
    <div class="row container">
      <h5 class="header">Other Interests</h2>
      <p class="grey-text text-darken-3 lighten-3">
        I don't think it's healthy to spend all my time staring at code, so I like to get outdoors and hike, raft or kayak when the weather is nice.
        People close to me will tell you that I am super competitive; I play (and watch) <a class="modal-trigger" href="#basketball" onclick="showModal()">basketball</a> at least a few times a week and tennis whenever the weather permits.
        I am also really passionate about music, I listen to a wide range of artists and love concerts.
        In my spare time, I produce music on Apple's Logic Pro X, and write shell scripts to make my life easier (i.e. Map drum samples to pads on midi controller) when possible.
      </p>
    </div>
  </div>

  <div id="basketball" class="modal">
      <img src="img/Peter.gif" class="modal-img" />
  </div>

</div>
<?php
  include 'includes/footer.php';
?>
