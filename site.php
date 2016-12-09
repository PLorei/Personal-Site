<?php
  include 'includes/functions.php';
  include 'includes/header.php';
?>
<div id="backgroundWrapper">
  <div class="container page-wrapper">
    <h3 class="center info-header">About This Site</h3>
    <div class="row">
      <div class="col s12 m6">
        <div class="card">
          <p>
            This site was built with PHP and jQuery.
            I used Github's Atom as a text editor and used XAMPP to develop PHP locally.
          </p>
          <p>
            The frontend framework used is MaterializeCSS, a material design framework build by a team of students from CMU, here in Pittsburgh.
            It's super easy to use, the documentation is good, and personally I think it looks cleaner than Bootstrap - and it's still being added to.
            The site is optimized for all devices, resize your viewport to see it in action.
          </p>
          <p>
            The icons come from Google's suite of free material icons.
            I used Google fonts for the typefaces on this page. The fonts used are:
          </p>
          <span class="fugaz">Fugaz One</span>, <span class="montserrat">Montserrat</span>, and Roboto.
        </div>
      </div>
      <div class="col s12 m6">
        <?php
          $links = array(
            array("https://atom.io/", "Atom"),
            array("https://www.apachefriends.org/download.html", "XAMPP"),
            array("http://materializecss.com/", "Materialize CSS"),
            array("https://fonts.google.com", "Google Fonts"),
            array("http://www.mattbowytz.com/cs1520.php", "CS1520 Home Page"),
            array("https://github.com/PLorei/Project2", "Site GitHub Repo"),
          );
          buildLinkList($links);
        ?>
      </div>
    </div>
  </div>
</div>
<?php
  include 'includes/footer.php';
?>
