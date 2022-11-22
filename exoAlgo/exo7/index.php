<?php
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