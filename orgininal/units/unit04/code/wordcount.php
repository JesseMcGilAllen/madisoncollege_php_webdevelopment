<?php
  $string = "Happy New Year, to you!";
  $num_words = str_word_count($string);
  print "There are $num_words words in \"$string\"<br /><br />";
  // use print_r to demo str_word_count() with accented letters
  $num_words = str_word_count("Solstickan s�ljes till f�rm�n f�r barn och
                               gamla",0,"���");
  print "There are $num_words words in the string represented by "
       ."this Array output:<br /><br />";
  print_r(str_word_count("Solstickan s�ljes till f�rm�n f�r barn och
                          gamla",1,"���"));
?>
