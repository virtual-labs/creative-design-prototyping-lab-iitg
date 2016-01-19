<?php
    session_start();
	
    header ("Content-type: image/png");
    
    $time1 = $_SESSION['time1'];
    $time2 = $_SESSION['time2'];
    $time3 = $_SESSION['time3'];
    $time4 = $_SESSION['time4'];
    
    $c1 = 500-$time1;
    $c2 = 500-$time2;
    $c3 = 500-$time3;
    $c4 = 500-$time4;
    
    $im = @ImageCreate (500, 501)
    or die ("Cannot Initialize new GD image stream");
    
    //allocating colors
    $background_color = ImageColorAllocate ($im, 224, 234, 234);
    $text_color = ImageColorAllocate ($im, 233, 14, 91);
    $black = ImageColorAllocate ($im, 0, 0, 0);
    $fill = imagecolorallocate($im, 0, 0, 0);

    //x-axis and y-axis
    imageline ($im,0,0,0,500,$black);
    imageline ($im,0,500,500,500,$black);
    
    //main graph
    //imageline ($im,0,500,100,$c1,$text_color);
    imageline ($im,100,$c1,200,$c2,$text_color);
    imageline ($im,200,$c2,300,$c3,$text_color);
    imageline ($im,300,$c3,400,$c4,$text_color);
    
    //circles to indicate the points on the graphs
    imageellipse ($im, 100, $c1, 10, 10, $black);
    imageellipse ($im, 200, $c2, 10, 10, $black);
    imageellipse ($im, 300, $c3, 10, 10, $black);
    imageellipse ($im, 400, $c4, 10, 10, $black);
    
    //fill color
    imagefilltoborder($im, 100, $c1, $black, $fill);
    imagefilltoborder($im, 200, $c2, $black, $fill);
    imagefilltoborder($im, 300, $c3, $black, $fill);
    imagefilltoborder($im, 400, $c4, $black, $fill);
    
    //point string
    imagestring($im, 5, 100, $c1+10, 'Case 1', $text_color);
    imagestring($im, 5, 200, $c1-10, 'Case 2', $text_color);
    imagestring($im, 5, 300, $c1+10, 'Case 3', $text_color);
    imagestring($im, 5, 400, $c1-10, 'Case 4', $text_color);

    ImagePng ($im);
?>