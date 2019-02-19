<?php
if( $_POST["name"] && strcmp($_POST["name"],gethostname()) <=>0){



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
  echo $json_encode("Authentication failed")
}
?>