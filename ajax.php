<?php
  require_once('mysqlconnection.php');

  $country = $_GET['country'];
  $state = $_GET['state'];

  $sql = "SELECT * FROM `states` where `country_id`='$country'";
  $sql2 = "SELECT * FROM `cities` where `state_id`='$state'";

  $result = $conn->query($sql);
  $result2 = $conn->query($sql2);

if($country!=""){
  if($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
      echo '<option class="font-weight-bold text-monospace" value="'.$row['id'].'">
        '. $row['name'].'
      </option>'."<br>";
      }
    }
  }


if($state!=""){
  if($result2->num_rows>0){
    while ($row = $result2->fetch_assoc()){
      echo '<option class="font-weight-bold text-monospace" value="'.$row['id'].'">
        '. $row['name'].'
      </option>'."<br>";
      }
    }
}

?>
