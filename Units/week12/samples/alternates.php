<?php
  $fh = fopen('data10.txt','r');
  if (!$fh)
    exit('File not found.');
  $text = fgets($fh);
  while (!feof($fh)) {
    if (preg_match('/Steve|Betty|Jon/', $text)) {
      echo $text,'<br />';
    }
    $text = fgets($fh);
  }
?>
