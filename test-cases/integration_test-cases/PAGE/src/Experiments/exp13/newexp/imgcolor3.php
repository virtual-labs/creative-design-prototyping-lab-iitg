<?php
    session_start();
	
    header ("Content-type: image/png");
    
    
    
    
    
    
    
    
    $im = @ImageCreate (600, 601)
    or die ("Cannot Initialize new GD image stream");
    
    //allocating colors
    $background_color = ImageColorAllocate ($im, 224, 234, 234);
    $text_color = ImageColorAllocate ($im, 233, 14, 91);
    $black = ImageColorAllocate ($im, 0, 0, 0);
    $red = ImageColorAllocate ($im, 255, 0, 0);
    $green = ImageColorAllocate ($im, 0, 255, 0);
    $blue = ImageColorAllocate ($im, 0, 0, 255);
    $yellow = ImageColorAllocate ($im, 255, 170, 0);
    $fill = imagecolorallocate($im, 0, 0, 0);

    //x-axis and y-axis
    imageline ($im,0,0,0,600,$black);
    imageline ($im,0,600,600,600,$black);
    
    //main graph
    //imageline ($im,0,500,100,$c1,$text_color);
    imageline ($im,80,$c9,180,$c10,$green);
    imageline ($im,180,$c10,280,$c11,$green);
    imageline ($im,280,$c11,380,$c12,$green);
    
    
    
    //circles to indicate the points on the graphs
    imageellipse ($im, 80, $c9, 10, 10, $blue);
    imageellipse ($im, 180, $c10, 10, 10, $blue);
    imageellipse ($im, 280, $c11, 10, 10, $blue);
    imageellipse ($im, 380, $c12, 10, 10, $blue);
    
        
    //fill color
    //imagefilltoborder ($im, 100, $c1, $green, $blue);
    
    /*point string
    imagestring($im, 5, 100, $c2+20, '(A, A)', $text_color);
    imagestring($im, 5, 200, $c5+20, '(F, F)', $text_color);
    imagestring($im, 5, 300, $c9+20, '(K, K)', $text_color);
    
    imagestring($im, 5, 100, $c1-20, '(A, a)', $text_color);
    imagestring($im, 5, 200, $c6-20, '(F, f)', $text_color);
    imagestring($im, 5, 300, $c10-20, '(K, k)', $text_color);*/
    
    ImagePng ($im);
?>