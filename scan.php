<?php
//Directory path here
$dir = "/home/pi/storage";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    $fileList = array();
    $i=0;
    while (($file = readdir($dh)) !== false){
      if(!preg_grep('/^([^.])/', scandir($file))){ //Checks for hidden files. Files starting with . (dot)
        $fileList[$i]["path"] =  "data/".$file;
        if(filemtime($file)){ //filemtime — Gets file modification time
          $fileList[$i]["time"] =  date ("F d Y H:i:s.", filemtime($file));
        }
        else{
          $fileList[$i]["time"] = null;
        }
        $i++;
      }
    }
    closedir($dh);
  }

    $jsonObj = json_encode($fileList);
    echo $jsonObj;
}
else{
    echo "Not a directory";
}


?>