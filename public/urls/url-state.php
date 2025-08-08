<?php
error_reporting( E_ALL );

include 'db.php';












$sql = "SELECT * FROM location_states";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

   $state_id = $row["state_id"];
   $state_name = $row["state_name"];
   $state_url = $row["state_url"];

   $url = generateUrl($state_name);


    echo "id: " . $state_id. " - state_name: " . $state_name. " - state_url: " . $state_url. " - url: " . $url.  "<br>";



    /* $sql = "UPDATE  location_states SET  state_url='".$url."' WHERE state_id = '".$state_id."'  ";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
*/
  




  }
} else {
  echo "0 results";
}
$conn->close();


































function generateUrl($url){
    # Prep string with some basic normalization
    $url = strtolower($url);
    $url = strip_tags($url);
    $url = stripslashes($url);
    $url = html_entity_decode($url);

    # Remove quotes (can't, etc.)
    $url = str_replace('\'', '', $url);

    # Replace non-alpha numeric with hyphens
    $match = '/[^a-z0-9]+/';
    $replace = '-';
    $url = preg_replace($match, $replace, $url);

    $url = trim($url, '-');

    return $url;
}



?>