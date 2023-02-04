<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      function array_union($x, $y)
      { 
        // union des tableaux
         $aunion=  array_merge(
               array_intersect($x, $y),
               array_diff($x, $y),     
               array_diff($y, $x)      
           );
           return $aunion;
      }
        $array1 = array(1, 2, 3, 4,5);
        $array2 = array(2, 3, 4, 5, 6,7,8);
        //appele de la fonction
        print_r(array_union($array1, $array2));
    ?>
</body>
</html>