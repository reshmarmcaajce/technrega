<?php
include_once "connection.php";

if (!empty($_POST["mid"])) {
  $mid = $_POST["mid"];

  $query = "SELECT * FROM mate WHERE mid = '$mid'";

  $results = mysqli_query($con, $query);
  ?>
  <option >select </option>
  
  <?php

  while($result1= mysqli_fetch_array($results)){

    ?>

    <option value="<?php echo $result1 ["mid"]; ?>"> <?php echo $result1 ["mname"]; ?></option>

     <?php
}
}
?>
