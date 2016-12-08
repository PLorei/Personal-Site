<div id="home-page" class="page">
  <div class="row">
    <div class="col s12 l8 offset-l2">
      <div class="card">
          <h5 class="center">
    	    Welcome to CS1520 Project 1!
          </h5>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <p>
          Please take a look around the site. Navigate using the links in the navbar.
          The site was built with php and JQuery.
          The frontend framework is MaterializeCSS, a material design CSS framework built by a team of students from CMU, here in Pittsburgh.
          This site is optimized for all devices. Resize your window to see it in action.
          Development was done with Sublime Text, and the local server used is XAMPP.
        </p>
      </div>
    </div>
    <div class="col s12 m6">
      <?php
        $links = array(
          array("http://materializecss.com/", "Materialize CSS"),
          array("https://www.sublimetext.com/", "Sublime Text"),
          array("https://www.apachefriends.org/download.html", "XAMPP"),
          array("http://www.mattbowytz.com/cs1520.php", "CS1520 Home Page"),
          array("https://github.com/cs1520", "CS1520 GitHub Page")
        );
        foreach($links as $cur) {
        	buildLinkBlock($cur[0], $cur[1]);
        }
      ?>
    </div>
  </div>
</div>