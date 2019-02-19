<?php
$row = 1;
if (($handle = fopen("/home/pi/storage/data.csv", "r")) !== FALSE) {
    /*while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
       // echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }*/
    while (($row = fgetcsv($handle, 0, ",")) !== FALSE) {
        //Dump out the row for the sake of clarity.
        var_dump($row);
    }
    echo $row[1];
    fclose($handle);
}
?>