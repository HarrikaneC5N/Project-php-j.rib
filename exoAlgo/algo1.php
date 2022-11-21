<?php 
$notes = [15,12,19,8,9,-5,2,1];
$smaller = 21;
$notesR = [false,false,false,false,false,false,false,false];
for($i = 0; $i < sizeof($notes); $i++){
    // if($notesR[$i] != true){
    //     $notesR[$i] = true;
    // }

    if($notes[$i] <= $smaller){
        $smaller = $notes[$i];
        print_r($smaller);
        echo " est le plus petit du tableau <br>";
    }

}

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

function minToMax($notes){
    for($i=0; $i <= sizeof($notes)-1;$i++);{
        for($j=0; $j <= sizeof($notes)-1;$j++){
            if($notes[$j+1] < $notes[$j]){
                $notes[$j+1] = $notes[$j];
                $notes[$j] = $notes[$j+1];
            };
        };
    };
};
  

minToMax([15,4,18,-4,15]);

?>