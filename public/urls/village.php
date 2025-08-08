<?php

include 'db.php';


$sql = "SELECT * FROM aaa";
$result = $conn->query($sql);


/*
id
sate
district
block
village
*/

$j = 0;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

   $id = $row["id"];
   $sate = $row["sate"];
   $district = $row["district"];
   $block = $row["block"];
   $village =  $row["village"];

   $block_l = strtolower($block);


   $village = trim($village);


   



 

    $sqlb = "SELECT * FROM location_blocks WHERE block_name LIKE '".$block_l."'  ";

    $resultb = $conn->query($sqlb);

    

    if ($resultb->num_rows > 0) {

      while($row = $resultb->fetch_assoc()) {

       /*$j = $j+1;

        $block_id = $row["block_id"];
        $block_name = $row["block_name"];

        $village_url = generateUrl($village);


        echo "$j => MATCH *** => $block_id = $block_name ==> * $block ===> $village ===> $village_url<br>";
        $sqlp = "INSERT INTO location_cities SET  block_id='".$block_id."', city_name='".$village."', city_url='".$village_url."'";
        $r = $conn->query($sqlp);

*/

      }
   

    }













   /* echo "<hr>";

    $myArray = explode(',', $fulldata);


    $i = 0;
    foreach($myArray as $blocks){

      $i = $i+1;

      $block = trim($blocks);

      $block_url = generateUrl($block);

      echo $i ."-". $block ." *** ".$block_url ." ## ";

     /* $sqlb = "INSERT INTO location_blocks SET  district_id = '".$did."' , block_name ='".$block."', block_url = '".$block_url."'  ";

      $r = $conn->query($sqlb);*

    }

    echo "<hr>";
*/
      


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