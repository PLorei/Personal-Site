<!DOCTYPE html>
<html>
  <head>
    <title>Peter Lorei</title>
    <?php
      $styles = array("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css", "css/style.css", "http://fonts.googleapis.com/icon?family=Material+Icons", "https://fonts.googleapis.com/css?family=Fugaz+One|Montserrat");

      # Conditionally add page-specific stylesheets
      if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) {
        array_push($styles, "css/index.css");
      }
      else if((strpos($_SERVER['SCRIPT_NAME'], 'contact.php') !== false)||(strpos($_SERVER['SCRIPT_NAME'], 'submit.php') !== false)) {
        array_push($styles, "css/contact.css");
      }
      else {
        array_push($styles, "css/site.css");
      }

      getStyles($styles);
    ?>
    <link rel="icon" href="img/Peter.jpg">
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
          <?php getNavLinks(); ?>
        </ul>
        <ul class="right right-nav">

          <?php if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) { ?>
              <li id="myName">
                Peter Lorei
              </li>
          <?php } else { ?>
              <li id="myName" class="show-name">
                Peter Lorei
              </li>
          <?php } ?>

        </ul>
        <ul class="side-nav" id="mobileDemo">
          <?php getNavLinks(); ?>
        </ul>
      </div>
    </nav>
  </div>
