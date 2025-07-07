<?php
error_reporting( E_ALL );

include 'db.php';



$sql = "SELECT * FROM zzz_blocks";
$result = $conn->query($sql);

echo "dsds";


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

   $blocks = $row["blocks"];
   $id = $row["id"];
   $district = $row["district"];


    echo "id: " . $row["id"]. " - district: " . $row["district"].  "<br>";

    $blockArr = explode(",",$blocks);

    print_r($blockArr);

    echo "<hr>";


   echo "<br>****<br>";

   foreach ($blockArr as $block) {

          $bl = trim($block);
        echo trim($block) ."<br>";


          /*  $sql = "INSERT INTO  zzz_block_list SET  district_id='".$id."', district='".$district."', blocks='".$bl."' ";

            if (mysqli_query($conn, $sql)) {
              echo "New record created successfully";
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }*/

   }
   echo "<br>****<br>";





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