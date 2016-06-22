<?php
    session_start();
	
    header ("Content-type: image/png");
    
    $time1 = $_SESSION['time1'];
    $time2 = $_SESSION['time2'];
    $time3 = $_SESSION['time3'];
    $time4 = $_SESSION['time4'];
    $time5 = $_SESSION['time5'];
    $time6 = $_SESSION['time6'];
    $time7 = $_SESSION['time7'];
    $time8 = $_SESSION['time8'];
    $time9 = $_SESSION['time9'];
    $time10 = $_SESSION['time10'];
    $time11 = $_SESSION['time11'];
    $time12 = $_SESSION['time12'];
    
    $c1 = 500-$time2;
    $c2 = 500-$time1;
    $c3 = 500-$time3;
    $c4 = 500-$time4;
    $c5 = 400-$time7;
    $c6 = 400-$time5;
    $c7 = 400-$time6;
    $c8 = 400-$time8;
    $c9 = 300-$time10;
    $c10 = 300-$time11;
    $c11 = 300-$time9;
    $c12 = 300-$time12;
    
    $im = @ImageCreate (500, 501)
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
    imageline ($im,0,0,0,500,$black);
    imageline ($im,0,500,500,500,$black);
    
    //main graph
    //imageline ($im,0,500,100,$c1,$text_color);
    imageline ($im,100,$c2,200,$c7,$yellow);
    imageline ($im,200,$c7,300,$c9,$yellow);
    
    imageline ($im,100,$c1,200,$c6,$green);
    imageline ($im,200,$c6,300,$c10,$green);
    
    /*imageline ($im,100,$c9,200,$c10,$blue);
    imageline ($im,200,$c10,300,$c11,$blue);
    imageline ($im,300,$c11,400,$c12,$blue);
    */
    
    //circles to indicate the points on the graphs
    imageellipse ($im, 100, $c2, 10, 10, $yellow);
    imageellipse ($im, 200, $c7, 10, 10, $yellow);
    imageellipse ($im, 300, $c9, 10, 10, $yellow);
    
    imageellipse ($im, 100, $c1, 10, 10, $green);
    imageellipse ($im, 200, $c6, 10, 10, $green);
    imageellipse ($im, 300, $c10, 10, 10, $green);
    
    /*imageellipse ($im, 100, $c9, 10, 10, $blue);
    imageellipse ($im, 200, $c10, 10, 10, $blue);
    imageellipse ($im, 300, $c11, 10, 10, $blue);
    imageellipse ($im, 400, $c12, 10, 10, $blue);*/
    
    //fill color
    //imagefilltoborder ($im, 100, $c1, $green, $blue);
    
    //point string
    imagestring($im, 5, 100, $c2+20, '(A, A)', $text_color);
    imagestring($im, 5, 200, $c7+20, '(F, F)', $text_color);
    imagestring($im, 5, 300, $c9+20, '(K, K)', $text_color);
    
    imagestring($im, 5, 100, $c2+20, '(A, a)', $text_color);
    imagestring($im, 5, 200, $c6+20, '(F, f)', $text_color);
    imagestring($im, 5, 300, $c10+20, '(K, k)', $text_color);
    
    /*imagestring($im, 5, 100, $c9-20, '(K, K)', $text_color);
    imagestring($im, 5, 200, $c10-20, '(K, k)', $text_color);
    imagestring($im, 5, 300, $c11-20, '(K, L)', $text_color);
    imagestring($im, 5, 400, $c12-20, '(K, l)', $text_color);*/

    ImagePng ($im);
?>