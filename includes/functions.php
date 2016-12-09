<?php

  # Builds navigation link for top nav and mobile menu.
  function getNavLinks() {
    $navLinks = array(
      array("Home", "index.php"),
      array("Contact", "contact.php"),
      array("Site Info", "site.php")
    );
    foreach($navLinks as $value):
  	  echo "<li class='nav-link'><a href='";
      echo $value[1];
      echo "'>";
  	  echo $value[0];
  	  echo "</a></li>";
    endforeach;
  }

  # Gets a stylesheet from specified CDN or local directory
  # $styles - array of urls to CDNs or local stylesheets
  function getStyles(array $styles) {
    foreach($styles as $cur):
      echo "<link rel='stylesheet' href='";
      echo $cur;
      echo "'/>";
    endforeach;
  }

  # $scripts - array of urls to CDNs or local scripts
  function getScripts(array $scripts) {
    foreach($scripts as $cur):
      echo "<script type='text/javascript' src='";
      echo $cur;
      echo "'></script>";
    endforeach;
  }

  function buildLinkBlock(string $link, string $text) {
  	echo "<a href='";
    echo $link;
    echo "' target='_blank'><div class='card hoverable'><span class='center'>";
    echo $text;
    echo "</span></div></a>";
  }

  function buildChip(string $text) {
    echo "<div class='chip'>";
    echo $text;
    echo "</div>";
  }

  # Builds the expandable materialize list
  # $header - (string) header text
  # $icon - (string) code for material icon font <i> tag
  # $chips - (string array) list of all text to be built into chips
  function buildPopoutList(string $header, string $icon, array $chips) {
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

  # $id - sets id and name properties of field
  # $class - sets class of field
  # $labelText - text to be displayed in form label
  # $iconName - code for Material icon to prefix field
  # $dataError - sets the field's data-error property
  # $isTextArea - true renders a textarea, false renders an input field
  function buildInputField(string $id, string $class, string $labelText, string $iconName, string $dataError, bool $isTextArea) {
    echo "<div class='input-field col s12 m8 offset-m2'>";
    echo "<i class='material-icons prefix'>" . $iconName . "</i>";
    if($isTextArea) {
      echo "<textarea id='" . $id . "' name='" . $id . "' class='" . $class . "' required='' aria-required='true'></textarea>";
    }
    else {
      echo "<input id='" . $id . "' name='" . $id . "'' type='text' class='" . $class . "' required='' aria-required='true'>";
    }
    echo "<label for='".$id."' data-error='" . $dataError . "'>" . $labelText . "</label>";
    echo "</div>";
  }

  # Builds list of links. Will slide in using showList() function in page.js
  function buildLinkList(array $links) {
    echo "<ul id='linkList'>";
    foreach($links as $cur) {
      echo "<li class='link-element'>";
      buildLinkBlock($cur[0], $cur[1]);
      echo "</li>";
    }
    echo "</ul>";
  }
?>
