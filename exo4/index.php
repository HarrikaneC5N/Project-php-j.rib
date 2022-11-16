<?php 
    // function to get the average
    function bankAverage(){
    $storage = [122, 143, 45, 28];
    $takeOut = [12, 47, 60, 80];
    // divide an array by himself to split it by the good number
    $averageStor =  array_sum($storage)/count($storage);
    $averageTakeOut =  array_sum($takeOut)/count($takeOut);
    // display the resulsts
    echo "$averageStor Est la moyenne des dépots sur le compte.<br>";
    echo "$averageTakeOut Est la moyenne des retraits sur le compte.<br>";
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleurs</title>
</head>
<body>
    <div>
        <p>
            <!-- call the function -->
            <?php 
                bankAverage();
            ?>
    </div>
</body>
</html>