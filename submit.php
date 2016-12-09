<?php
  include 'includes/functions.php';
  include 'includes/header.php';
?>
  <div id="image-wrapper">
  <div class="container contact-container">
    <div class="row">
<?php
  $servername = "localhost";
  $username = "root";

  // Create connection
  $conn = new mysqli($servername, $username);
  // Check connection
  if ($conn->connect_error) {
      echo "<div class='col s12 m8 offset-m2'><div class='submit-wrapper card z-depth-2'><span class='db-error'><span class='error-type'>Error connecting to database: </span>" . $conn->connect_error;
      echo "</span></div></div>";
  }

  // Create database if doesn't exist
  $sql = "CREATE DATABASE IF NOT EXISTS myData";
  if ($conn->query($sql) === TRUE) {
  } else {
      echo "<div class='col s12 m8 offset-m2'><div class='submit-wrapper card z-depth-2'><span class='db-error'><span class='error-type'>Error creating database: </span>" . $conn->error;
      echo "</span></div></div>";
  }

  // select database
  mysqli_select_db($conn,"myData");

  // build the table if it does not exist
  $sql = "CREATE TABLE IF NOT EXISTS messages (
    first_name  VARCHAR(50) NOT NULL,
    last_name   VARCHAR(50) NOT NULL,
    email       VARCHAR(50) NOT NULL,
    message_text VARCHAR(150) NOT NULL,
    time_sent   TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(email, time_sent)
  )";

  if (!$conn->query($sql)) {
    echo "<div class='col s12 m8 offset-m2'><div class='submit-wrapper card z-depth-2'><span class='db-error'><span class='error-type'>Error creating the database: </span>" . $conn->error;
    echo "</span></div></div>";
  }

  // insert the form data
  $sql="INSERT INTO messages (first_name, last_name, email, message_text)
    VALUES
    ('$_POST[firstname]','$_POST[lastname]', '$_POST[email]', '$_POST[messagetext]')";

  if (!$conn->query($sql)) {
    echo "<div class='col s12 m8 offset-m2'><div class='submit-wrapper card z-depth-2'><span class='db-error'><span class='error-type'>Error submitting to database: </span>" . $conn->error;
    echo "</span></div></div>";
  }
  else {
    echo "<div class='col s12 m8 offset-m2'><div class='submit-wrapper card z-depth-2'><span class='success-word'>Success!</span><span class='db-success'>Message succesfully submitted to database! </span>";
    echo "<span class='thank-you'>Thanks ";
    echo $_POST['firstname'];
    echo "!</span></div></div>";
  }

  $conn->close();
?>
    </div>
  </div>  <!--end container-->
</div>

<?php
  include 'includes/footer.php';
?>
