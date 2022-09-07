<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WEB 3.0</title>
  </head>
  <body>
    <h1><u>Practicing php</u></h1>
    <?php
    $console = 54;
    $laser = "His Name: ";

    echo "Digitas = $console <br>";
    printf("$laser is Abir");

    function writeCO()
    {
      echo "<br>hi,am a function,mate<br>";
    }

    writeCO();
    function familyName($fname, $year){
      echo "$fname Khan. Born is $year <br>";
    }
    familyName("Abir", "1997");
    familyName("Anik", "1996");
    familyName("Abhi", "1998"); //changes is made
    //PHP ArrayAccess

    $cars = array("HL1", "CM2", "HL3", "HL4");
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";

    // echo "$cars[2]";
    $arrlength = count($cars);

    //LOOP trying
    for($var = 0; $var < $arrlength; $var++){
      echo $cars[$var];
      printf("<br>");
    }


    //</br>
     ?>
  </body>
</html>
