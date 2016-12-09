<?php
  include 'includes/functions.php';
  include 'includes/header.php';
?>
<div id="image-wrapper">
<div class="container contact-container">
  <h3 class="center">Contact Me</h3>
  <div class="row">
    <div class="col s12 m8 offset-m2">
      <div class="card">
        <p>
          I like to think of myself as an approachable person, feel free to contact me about programming, music, the NBA, or anything really, I'm always down to make new friends!
        </p>
      </div>
    </div>
  </div>
  <div class="row">
    <form class="card col s12 l8" action="submit.php" method="post">
      <div class="input-field col s12 m4 offset-m2">
          <i class="material-icons prefix">person_outline</i>
          <input id="first-name" name="firstname" type="text" class="validate" required="" aria-required="true">
          <label for="first-name">First Name</label>
      </div>
      <div class="input-field col s12 m4">
          <i class="material-icons prefix">account_circle</i>
          <input id="last-name" name="lastname" type="text" class="validate" required="" aria-required="true">
          <label for="last-name">Last Name</label>
      </div>
      <div class="input-field col s12 m8 offset-m2">
        <i class="material-icons prefix">email</i>
        <input id="email" type="email" name='email' class="validate" required="" aria-required="true">
        <label for="email" data-error="Incorrect Email Format">Email</label>
      </div>
      <div class="input-field col s12 m8 offset-m2">
        <i class="material-icons prefix">mode_edit</i>
        <textarea id="message-text" name='messagetext' class="materialize-textarea" required="" aria-required="true"></textarea>
        <label for="message-text">Message Text</label>
      </div>
      <div class="col s6 offset-s3 center">
        <button class="btn waves-effect waves-light" id="submit" type="submit" name="action">
          Submit
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
    <div class="col s12 m6 offset-m3 l4">
      <ul id="link-list">
      <?php
        $links = array(
          array("mailto:loreipeter@gmail.com?Subject=Hey%20Peter", "Hit Me Up!"),
          array("https://github.com/PLorei", "My GitHub Page"),
          array("http://stackoverflow.com/users/4052312/peter-lorei", "My StackOverflow Account"),
          array("https://github.com/PLorei/Project2", "GitHub Repo for this Site"),
        );
        foreach($links as $cur) {
          echo "<li class='link-element'>";
          buildLinkBlock($cur[0], $cur[1]);
          echo "</li>";
        }
      ?>
      </ul>
    </div>
  </div>
</div>
</div>

<?php
  include 'includes/footer.php';
?>
