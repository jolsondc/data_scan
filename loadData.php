<?php
if( $_REQUEST["name"] && strcmp($_REQUEST["name"],gethostname()) ==0){
if (($handle = fopen("/home/pi/storage/data.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
  {		
    $finalStr =$finalStr."<br />\n". implode(',', $data) ;
  }
  // Close the file
    fclose($handle);
    echo trim($finalStr,"<br />\n");
}
}else{
  $myObj->error = "Authentication failed";
  $myJSON = json_encode($myObj);
  echo $myJSON;}
?>