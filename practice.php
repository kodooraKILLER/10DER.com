<?php
$myfile = fopen("categories.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
echo '<select>';
while(!feof($myfile)) {
  echo '<option>'.fgets($myfile) . '</option>';
}
echo '</select>';
fclose($myfile);
?>