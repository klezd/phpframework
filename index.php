<p>Hello World</p>
<?php
   $number1 = 2.28;
   $number2 = 3;
   $sum = $number1 + $number2;
   
   print("$number1 + $number2 = $sum<br>");

  /* $d = date("D");
         
   if ($d == "Fri") {
      echo "Have a nice weekend!";
   }  elseif ($d == "Sun") {
      echo "Have a nice Sunday!"; 
   } else {
      echo "Have a nice day!";
   }*/

   $grades = array("Donald" => 3, "Goofy" => 1, "Mickey" => 5);
         
         foreach ($grades as $key => $value) {
             echo "{$key} got a {$value}<br>";
         }

   

?>


<a href="image_upload.html">Image upload page</a>
<br>
<a href="phpObj.php">PHP Object</a>
<br>
<a href="signup.html">Sign Up</a>
