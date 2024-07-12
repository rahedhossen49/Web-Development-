

<?php


//! Pyramid Pattern

//*OutPut

//    *
//   ***
//  *****
// *******

$rows = 4;

for ($i = 1; $i <= $rows; $i++) {
  // Print leading spaces
  for ($j = $i; $j < $rows; $j++) {
    echo "&nbsp;";
  }
  // Print stars
  for ($j = 0; $j < (2 * $i - 1); $j++) {
    echo "*";
  }
  echo "<br>";
}



echo "<br>";


//!  Pattern

//*OutPut

// ********
// ********
// ********
// ********
// ********


for ($i = 0; $i < 5; $i++) {

  for ($j = 0; $j <= 7; $j++) {
    echo "*";
  }

  echo "<br>";
}













?>