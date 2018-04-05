<?php
include_once "connection.php";

if (!empty($_POST["panchayath_name"])) {
  $panchayath_name = $_POST["panchayath_name"];

  $query = "SELECT * FROM mate WHERE panchayath_name = '$panchayath_name'";

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
