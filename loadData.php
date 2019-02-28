<?php
$data = json_decode(file_get_contents('php://input'), true);
if( $_REQUEST["name"] && strcmp($_REQUEST["name"],gethostname()) ==0|| strcmp($data["name"],gethostname())==0){
if (($handle = fopen("/home/pi/storage/data.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
  {		
    $finalStr =$finalStr."\n". implode(',', $data) ;
  }
  // Close the file
    fclose($handle);
    echo trim($finalStr,"\n");
}
}else{
  $myObj->error = "Authentication failed";
  $myJSON = json_encode($myObj);
  echo $myJSON;
}
?>