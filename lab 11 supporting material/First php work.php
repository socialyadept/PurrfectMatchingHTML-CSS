 <!DOCTYPE html>
<html>
 <head>
  <title>Task-3</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>

  <?php
		$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
					68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

		echo "PHP is working! <br>";
		//rest of the code here
    $arr = explode(", ", $month_temp);
    $length = count($arr);

    //rounding off and finding the avg of the array
    $avg = round(array_sum($arr)/$length, 1);
    echo "<br>Average Temperature is : $avg<br>";

    //sorting the array
    sort($arr);

    //printing the lowest numbers
    echo "List of seven lowest temperatures : ";
    for ($i = 0; $i < 7; $i++) {
      if ($i != 6)
        echo "$arr[$i], ";
      else
        echo $arr[$i];
    }

    //printing the highest numbers
    echo "</br>List of seven highest temperatures : ";
    for ($i = $length - 7; $i < $length; $i++) {
      if ($i != $length - 1)
        echo "$arr[$i], ";
      else echo $arr[$i];
    }

    ?>
  </body>

</html>
