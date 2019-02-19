<?php
if( $_POST["name"] && $_POST["name"]===gethostname()){



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
  echo $json_encode("Authentication failed");
}
?>