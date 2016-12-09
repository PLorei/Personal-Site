    <footer class="page-footer">
      <div class="footer-copyright">
        <div class="container">
          <span>
            © 2016 Copyright Peter Lorei for CS1520
          </span>
        </div>
      </div>
    </footer>
    <?php
      $scripts = array("https://code.jquery.com/jquery-2.1.1.min.js", "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js", "js/page.js");

      # only add index scripts if on index page
      if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) {
        array_push($scripts, "js/index.js");
      }

      getScripts($scripts);
    ?>
  </body>

</html>
