<?php

include 'db.php';


$sql = "SELECT * FROM location_districts";
$result = $conn->query($sql);


/*

district_id
state_id
district_name
district_url
*/

$j = 0;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

   $district_id = $row["district_id"];
   $state_id = $row["state_id"];
   $district_name = $row["district_name"];
   $district_url = $row["district_url"];

   $district_name_l = strtolower($district_name);



   echo "district_id ==> $district_id  | state_id ==> $state_id | district_name ==> $district_name | $district_name_l<br>";


    $sqlb = "SELECT district FROM location_pincodes WHERE LOWER(district) =  '".$district_name_l."'  ";

    $resultb = $conn->query($sqlb);

    

    if ($resultb->num_rows > 0) {

      echo "<hr>** MATCH <hr>";

    

      /*while($row = $resultb->fetch_assoc()) {

      

      }*/
   

    }
    else{
        $j = $j+1;
      echo "<hr>$j => ## MOT MATCH <hr>";
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