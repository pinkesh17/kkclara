<?php
error_reporting( E_ALL );

include 'db.php';








$sql = "SELECT * FROM aaa_dis";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

   $id = $row["id"];
   $did = $row["did"];
   $district = $row["district"];
   $fulldata = $row["fulldata"];

  // $url = generateUrl($state_name);


    echo "id: " . $id. " - did: " . $did. " - district: " . $district. " - fulldata: " . $fulldata.  "<br>";


    echo "<hr>";

    $myArray = explode(',', $fulldata);
   // print_r($myArray);

    $i = 0;
    foreach($myArray as $blocks){

      $i = $i+1;

      $block = trim($blocks);

      $block_url = generateUrl($block);

      echo $i ."-". $block ." *** ".$block_url ." ## ";

     /* $sqlb = "INSERT INTO location_blocks SET  district_id = '".$did."' , block_name ='".$block."', block_url = '".$block_url."'  ";

      $r = $conn->query($sqlb);*/

    }

    echo "<hr>";

      


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