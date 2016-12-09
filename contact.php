<?php
  include 'includes/functions.php';
  include 'includes/header.php';
?>
<div id="imageWrapper">
<div class="container contact-container">
  <h3 class="center">Contact Me</h3>
  <div class="row">
    <div class="col s12 m8 offset-m2 l4 push-l8">
      <div class="card">
        <p>
          I like to think of myself as an approachable person, feel free to contact me about programming, music, the NBA, or anything really, I'm always down to make new friends!
        </p>
      </div>
      <?php
        $links = array(
          array("mailto:loreipeter@gmail.com?Subject=Hey%20Peter", "Hit Me Up!"),
          array("https://github.com/PLorei", "My GitHub Page"),
          array("http://stackoverflow.com/users/4052312/peter-lorei", "My StackOverflow Account"),
          array("https://github.com/PLorei/Project2", "GitHub Repo for this Site"),
        );
        buildLinkList($links);
      ?>
    </div>
    <form class="card col s12 m8 offset-m2 l8 pull-l4" action="submit.php" method="post">
      <?php
        buildInputField("firstName", "validate", "First Name", "person_outline", "", false, false);
        buildInputField("lastName", "validate", "Last Name", "account_circle", "", false, false);
        buildInputField("email", "validate", "Email", "email", "Incorrect Email Format", false, true);
        buildInputField("messageText", "materialize-textarea", "Message Text", "mode_edit", "", true, false);
      ?>
      <div class="col s6 offset-s3 center">
        <button class="btn waves-effect waves-light" id="submit" type="submit" name="action">
          Submit
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </div>
</div>
</div>

<?php
  include 'includes/footer.php';
?>
