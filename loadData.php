<?php
 $dir= json_decode(stripslashes($dir_name),true);
echo $dir

if (($handle = fopen("/home/pi/storage/data.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
  {		
    $finalStr =$finalStr."<br />\n". implode(',', $data) ;
  }
  // Close the file
    fclose($handle);
    echo trim($finalStr,"<br />\n");
}
?>