<?php
include_once "connection.php";

if (!empty($_POST["did"])) {
  $did = $_POST["did"];

  $query = "SELECT * FROM panchayath WHERE did = '$did'";

  $results = mysqli_query($con, $query);
  ?>
  <option >select </option>
  
  <?php

  while($result1= mysqli_fetch_array($results)){

    ?>

    <option value="<?php echo $result1 ["panch_id"]; ?>"> <?php echo $result1 ["panchayath_name"]; ?></option>

     <?php
}
}
?>
