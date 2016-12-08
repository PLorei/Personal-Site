<div id="contact-page" class="page">
  <div class="row">
    <div class="col s12 m8 offset-m2">
      <div class="card">
        <h5 class="center">
          Contact Me
        </h5>
      </div>
    </div>
    <div class="col s12 m6">
      <div class="card">
        <p>
          I like to think of myself as an approachable person, feel free to contact me about programming, music, the NBA, or anything really, I'm always down to make new friends!
        </p>
      </div>
    </div>
    <div class="col s12 m6">
      <?php
        $links = array(
          array("mailto:loreipeter@gmail.com?Subject=Hey%20Peter", "Hit Me Up!"),
          array("https://github.com/PLorei", "My GitHub Page"),
          array("http://stackoverflow.com/users/4052312/peter-lorei", "My StackOverflow Account")
        );
        foreach($links as $cur) {
        	buildLinkBlock($cur[0], $cur[1]);
        }
      ?>
    </div>
  </div>
</div>
