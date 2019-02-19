<?php
if( $_POST["name"] ){
  echo $_POST['name'];

}
echo gethostname(); // may output e.g,: sandie

// Or, an option that also works before PHP 5.3
echo php_uname('n'); // may output e.g,: sandie
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