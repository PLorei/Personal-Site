<!DOCTYPE html>
<html>
  <head>
    <title>Peter Lorei</title>
    <?php
      getStyles();
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
          <?php
            getNavLinks();
          ?>
        </ul>
        <ul class="right right-nav">

          <?php
            if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) {
          ?>
              <li id="my-name">
                Peter Lorei
              </li>
          <?php
            }
            else {
          ?>
              <li id="my-name" class="show-name">
                Peter Lorei
              </li>
          <?php
            }
          ?>


        </ul>
        <ul class="side-nav" id="mobile-demo">
          <?php
            getNavLinks();
          ?>
        </ul>
      </div>
    </nav>
  </div>
