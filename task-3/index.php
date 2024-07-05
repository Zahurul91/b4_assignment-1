<?php
function fahToCel($fahrenheit) {
  return ($fahrenheit - 32) * 5/9;
}
$fahrenheit = 77;
$celsius = fahToCel($fahrenheit);
printf ("Temperature {$fahrenheit} °F  =%.2f °C ", $celsius);

echo "<br>";
echo "<br>";
function celTofah($celsius) {
    return ($celsius * 9/5 ) + 32;
  }
  $celsius=37.3254;
  $fahrenheit=celTofah($celsius);
  printf(" Temperature {$celsius} °C =  %.2f °F",$fahrenheit );
 