<?php
  $fh = fopen('data10.txt','r');
  if (!$fh)
    exit('File not found.');
  $text = fgets($fh);
  while (!feof($fh)) {
    if (preg_match('/^B/', $text)) {
      echo 'Matched: ', $text,'<br />';
    }
    else {
      echo 'No Match: ', $text,'<br />';
    }
    $text = fgets($fh);
  }
?>
