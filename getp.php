<?php
include_once "connection.php";

if (!empty($_POST["panch_id"])) {
  $panch_id = $_POST["panch_id"];

  $query = "SELECT * FROM panchayath WHERE panch_id = '$panch_id'";

  $results = mysqli_query($con, $query);
  ?>
  <option >select district</option>
  
  <?php

  while($result= mysqli_fetch_array($results)){

    ?>

    <option value="<?php echo $result ["panch_id"]; ?>"> <?php echo $result["panchayath_name"]; ?></option>

     <?php
}
}
?>
