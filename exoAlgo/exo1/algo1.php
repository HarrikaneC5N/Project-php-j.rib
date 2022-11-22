<?php 
$notes = [15,12,19,8,9,-5,2,1];
$smaller = 100000000000000;
// for($i = 0; $i < sizeof($notes); $i++){
//     // if($notesR[$i] != true){
//     //     $notesR[$i] = true;
//     // }
//     if($notes[$i] <= $smaller){
//         $smaller = $notes[$i];
//         print_r($smaller);
//         echo " est le plus petit du tableau <br>";
//     }

// }

// $items = array();
// foreach($group_membership as $username) {
//  $items[] = $username;
// }

// $notes = [15,12,19,8,9,-5,2,1];
// $smaller = 0;
// $min = 0;

// for($i = 0; $i < $notes[$i]; $i++){
//     $smaller = $notes[$i];
//     if($notes[$i] <= $smaller){

//     }
// }; 

function minToMax($notes)
{
    $size = count($notes);
    for($i=1; $i < $size;$i++);
    {
        for($j=$size-1; $j >= $i;$j--)
        {
            if($notes[$j+1] > $notes[$j])
            {
                $temp = $notes[$j+1];
                $notes[$j+1] = $notes[$j];
                $notes[$j] = $temp;
                var_dump($temp);
                echo $notes;
            };
        };
    };
};
  
minToMax($notes);

