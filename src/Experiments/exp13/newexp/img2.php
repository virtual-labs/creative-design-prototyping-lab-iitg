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
    
    /*$c1 = 500-$time2;
    $c2 = 500-$time1;
    $c3 = 500-$time3;
    $c4 = 500-$time4;
    $c5 = 500-$time7;
    $c6 = 500-$time5;
    $c7 = 500-$time6;
    $c8 = 500-$time8;
    $c9 = 500-$time10;
    $c10 = 500-$time11;
    $c11 = 500-$time9;
    $c12 = 500-$time12;*/
    
    
    
    $c1 = (500-$time1*2);
    $c2 = (500-$time2*2);
    
    $c5 = (500-$time7*2);
    $c6 = (500-$time5*2);
    
    $c9 = (500-$time10*2);
    $c10 = (500-$time11*2);
    
    
    
    $im = @ImageCreate (500, 501)
    or die ("Cannot Initialize new GD image stream");
    
    //allocating colors
    $background_color = ImageColorAllocate ($im, 224, 234, 234);
    $text_color = ImageColorAllocate ($im, 233, 14, 91);
    $black = ImageColorAllocate ($im, 0, 0, 0);
    $red = ImageColorAllocate ($im, 255, 0, 0);
    $green = ImageColorAllocate ($im, 17, 80, 14);
    $blue = ImageColorAllocate ($im, 0, 0, 255);
    $yellow = ImageColorAllocate ($im, 131, 62, 30);
    $fill = imagecolorallocate($im, 0, 0, 0);

    //x-axis and y-axis
    imageline ($im,0,0,0,500,$black);
    imageline ($im,0,500,500,500,$black);
    
    //main graph
    //circles to indicate the points on the graphs
    imageellipse ($im, 100, $c2, 10, 10, $black);
    imageellipse ($im, 200, $c5, 10, 10, $black);
    imageellipse ($im, 300, $c9, 10, 10, $black);
    
    imageellipse ($im, 100, $c1, 10, 10, $black);
    imageellipse ($im, 200, $c6, 10, 10, $black);
    imageellipse ($im, 300, $c10, 10, 10, $black);
    
    //fill color
    imagefilltoborder ($im, 100, $c2, $black, $black);
    imagefilltoborder ($im, 200, $c5, $black, $black);
    imagefilltoborder ($im, 300, $c9, $black, $black);
    
    imagefilltoborder ($im, 100, $c1, $black, $black);
    imagefilltoborder ($im, 200, $c6, $black, $black);
    imagefilltoborder ($im, 300, $c10, $black, $black);
    
    //imageline ($im,0,500,100,$c1,$text_color);
    imageline ($im,100,$c2,200,$c5,$green);
    imageline ($im,100,$c2+1,200,$c5+1,$green);
    imageline ($im,100,$c2-1,200,$c5-1,$green);
    
    imageline ($im,200,$c5,300,$c9,$green);
    imageline ($im,200,$c5+1,300,$c9+1,$green);
    imageline ($im,200,$c5-1,300,$c9-1,$green);
    
    
    imageline ($im,100,$c1,200,$c6,$red);
    imageline ($im,100,$c1+1,200,$c6+1,$red);
    imageline ($im,100,$c1-1,200,$c6-1,$red);
    
    imageline ($im,200,$c6,300,$c10,$red);
    imageline ($im,200,$c6+1,300,$c10+1,$red);
    imageline ($im,200,$c6-1,300,$c10-1,$red);
    
        
    //fill color
    //imagefilltoborder ($im, 100, $c1, $green, $blue);
    
    //point string
    imagestring($im, 5, 100, $c2+20, '(A, A)', $blue);
    imagestring($im, 5, 200, $c5+20, '(F, F)', $blue);
    imagestring($im, 5, 300, $c9+20, '(K, K)', $blue);
    
    imagestring($im, 5, 100, $c1-20, '(A, a)', $blue);
    imagestring($im, 5, 200, $c6-20, '(F, f)', $blue);
    imagestring($im, 5, 300, $c10-20, '(K, k)', $blue);
    
    ImagePng ($im);
?>