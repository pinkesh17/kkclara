<?php
error_reporting( E_ALL );

include 'db.php';



$sql = "SELECT * FROM zzz_block_list";
$result = $conn->query($sql);




die("----");



if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

   $district_id = $row["district_id"];
   $id = $row["id"];
   $blocks = $row["blocks"];
   $district = $row["district"];

   $url = generateUrl($blocks);


    echo "id: " . $row["id"]. " - blocks: " . $row["blocks"]. " - district: " . $row["district"]. " - url: " . $url.  "<br>";


/*
     $sql = "UPDATE  zzz_block_list SET  block_url='".$url."' WHERE id = '".$id."'  ";

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