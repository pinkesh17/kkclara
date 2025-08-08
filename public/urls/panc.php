<?php

include 'db.php';


$sql = "SELECT * FROM aaaaa WHERE status = 0";
$result = $conn->query($sql);


$j = 0;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

   $id = $row["id"];
   $sate = $row["sate"];
   $district = $row["district"];
   $block = $row["block"];

   $block_l = strtolower($block);

   $block_un = ucwords(trim($block_l));



   $panchayats = $row["panchayats"];

   $panchayats_l = strtolower(trim($panchayats));
   $panchayats_un = ucwords(trim($panchayats_l));


 

    $sqlb = "SELECT * FROM location_blocks WHERE   block_name LIKE '".$block_l."'  ";

    $resultb = $conn->query($sqlb);

    

    if ($resultb->num_rows > 0) {

      while($row = $resultb->fetch_assoc()) {

        $j = $j+1;

        $block_id = $row["block_id"];
        $block_name = $row["block_name"];

        $panchayat_url = generateUrl($panchayats_un);


        echo "$j => MATCH *** => $block_id = $block_name ==> * $block_un ===> $panchayats ===> $panchayats_un<br>";




        /*$sqlp = "INSERT INTO location_panchayat SET  blocks_id='".$block_id."', panchayat_name='".$panchayats_un."', panchayat_url='".$panchayat_url."'";

         $r = $conn->query($sqlp);




         $sqlu = "UPDATE  aaaaa SET  status='1' WHERE id = '".$id."'  ";
         $q = $conn->query($sqlu);

    */




      }



     /* $sqlb = "INSERT INTO location_panchayat SET  district_id = '".$did."' , block_name ='".$block."', block_url = '".$block_url."'  ";

      $r = $conn->query($sqlb);


panchayat_id  blocks_id panchayat_name  panchayat_url */

      

   

    }else{
      $j = $j+1;
       echo "NOT MATCH => $block => $block_un => $district => $block_l => $j<br>";
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