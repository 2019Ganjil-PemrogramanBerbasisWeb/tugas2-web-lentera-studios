<?php
  if ($handle = opendir('http://10.161.20.20/tugas2-web-mini/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "<a href='download.php?file=".$entry."'>".$entry."</a>\n";
        }
    }
    closedir($handle);
  }
 ?>
