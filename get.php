<?php
include_once "connection.php";

if (!empty($_POST["sid"])) {
  $sid = $_POST["sid"];

  $query = "SELECT * FROM district WHERE sid = '$sid'";

  $results = mysqli_query($con, $query);
  ?>
  <option >select district</option>
  
  <?php

  while($result= mysqli_fetch_array($results)){

    ?>

    <option value="<?php echo $result ["did"]; ?>"> <?php echo $result["dname"]; ?></option>

     <?php
}
}
?>
