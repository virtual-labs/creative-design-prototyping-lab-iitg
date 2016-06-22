<?php
    $case=0;
    
    for($i=0; $i<=4; $i++){
        if($case<4)
        {
            $case=$case+1;
        
            echo (rand(1,4). "<br />");
        }
    
        else{
            echo "Thank You";
        }
    }
?>