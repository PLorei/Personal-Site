<?php

  # Builds navigation link for top nav and mobile menu.
  function getNavLinks() {
    $navLinks = array(
      array("Home", "index.php"),
      array("Contact", "contact.php"),
      array("Site Info", "site.php")
    );
    #$navLinks = array("Home", "About", "Contact");
    foreach($navLinks as $value):
  	  echo "<li class='nav-link'><a href='";
      echo $value[1];
      echo "' onclick='show";
  	  echo $value[0];
  	  echo "()'>";
  	  echo $value[0];
  	  echo "</a></li>";
    endforeach;
  }

  # Gets a stylesheet from specified CDN or local directory
  function getStyles() {
  	$styles = array("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css", "css/style.css", "http://fonts.googleapis.com/icon?family=Material+Icons", "https://fonts.googleapis.com/css?family=Fugaz+One|Montserrat");
    foreach($styles as $cur):
      echo "<link rel='stylesheet' href='";
      echo $cur;
      echo "'/>";
    endforeach;
  }

  function getScripts($scripts) {
  	# $scripts = array("https://code.jquery.com/jquery-2.1.1.min.js", "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js", "js/page.js");
    foreach($scripts as $cur):
      echo "<script type='text/javascript' src='";
      echo $cur;
      echo "'></script>";
    endforeach;
  }

  function buildLinkBlock($link, $text) {
  	echo "<a href='";
    echo $link;
    echo "' target='_blank'><div class='card hoverable'><span class='center'>";
    echo $text;
    echo "</span></div></a>";
  }

  function buildChip($text) {
    echo "<div class='chip'>";
    echo $text;
    echo "</div>";
  }

  # Builds the expandable materialize list
  # $header - (string) header text
  # $icon - (string) code for material icon font <i> tag
  # $chips - (string array) list of all text to be built into chips
  function buildPopoutList($header, $icon, $chips) {
    echo "<li class='popout-element'><div class='collapsible-header'><i class='material-icons'>";
    echo $icon;
    echo "</i>";
    echo $header;
    echo "</div><div class='collapsible-body'>";
    foreach($chips as $cur) {
      buildChip($cur);
    }
    echo "</div></li>";
  }
?>
