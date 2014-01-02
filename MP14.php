<?php

//Calculates volume of either a cube or sphere

    echo "Choose what shape to calculate for volume:\n";
    echo "1 - Cube\n2 - Sphere\nEnter choice: ";
    $readChoice = fgets(STDIN);
    
    if($readChoice == 1){
        echo "Enter side size: ";
        $readSideSize= fgets(STDIN);
        $cubeVolume = $readSideSize * $readSideSize * $readSideSize;
        echo "The volume of the cube is: $cubeVolume \n";
    }
    if($readChoice == 2){
       echo "Enter radius: ";
        $readRadius= fgets(STDIN);
        $sphereVolume = (4 /3) * M_PI * ($readRadius * $readRadius * $readRadius);
        echo "The volume of the sphere is: $sphereVolume \n";
    }
    
?>