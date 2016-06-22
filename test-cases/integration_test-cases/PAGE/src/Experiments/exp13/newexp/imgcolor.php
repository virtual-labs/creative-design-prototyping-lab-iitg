<?php
    session_start();
	
    header ("Content-type: image/png");
    
    $timec1 = $_SESSION['timec1'];
    $timec2 = $_SESSION['timec2'];
    $timec3 = $_SESSION['timec3'];
    $timec4 = $_SESSION['timec4'];
    $timec5 = $_SESSION['timec5'];
    $timec6 = $_SESSION['timec6'];
    $timec7 = $_SESSION['timec7'];
    $timec8 = $_SESSION['timec8'];
    $timec9 = $_SESSION['timec9'];
    $timec10 = $_SESSION['timec10'];
    $timec11 = $_SESSION['timec11'];
    $timec12 = $_SESSION['timec12'];
    
    
    
    $c1 = (500-$timec1);
    $c2 = (500-$timec2);
    $c3 = (500-$timec3);
    $c4 = (500-$timec4);
    $c5 = (500-$timec5);
    $c6 = (500-$timec6);
    $c7 = (500-$timec7);
    $c8 = (500-$timec8);
    $c9 = (500-$timec9);
    $c10 = (500-$timec10);
    $c11 = (500-$timec11);
    $c12 = (500-$timec12);
    
    //taking average of different cases
    $ca=($c1+$c3+$c4)/3;
    $cb=($c5+$c7+$c8)/3;
    $cc=($c9+$c11+$c12)/3;
    
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
    imageellipse ($im, 100, $c2, 15, 15, $black);
    imageellipse ($im, 200, $c6, 15, 15, $black);
    imageellipse ($im, 300, $c10, 15, 15, $black);
    //imageellipse ($im, 400, $c4, 15, 15, $black);
    
    imageellipse ($im, 100, $ca, 15, 15, $black);
    imageellipse ($im, 200, $cb, 15, 15, $black);
    imageellipse ($im, 300, $cc, 15, 15, $black);
    
    /*imageellipse ($im, 100, $c4, 15, 15, $black);
    imageellipse ($im, 200, $c8, 15, 15, $black);
    imageellipse ($im, 300, $c12, 15, 15, $black);
    //imageellipse ($im, 400, $c8, 15, 15, $black);
    
    imageellipse ($im, 100, $c3, 15, 15, $black);
    imageellipse ($im, 200, $c7, 15, 15, $black);
    imageellipse ($im, 300, $c11, 15, 15, $black);
    //imageellipse ($im, 400, $c12, 15, 15, $black);*/
    
    
    //fill color
    imagefilltoborder ($im, 100, $c2, $black, $black);
    imagefilltoborder ($im, 200, $c6, $black, $black);
    imagefilltoborder ($im, 300, $c10, $black, $black);
    //imagefilltoborder ($im, 400, $c4, $black, $black);

    imagefilltoborder ($im, 100, $ca, $black, $black);
    imagefilltoborder ($im, 200, $cb, $black, $black);
    imagefilltoborder ($im, 300, $cc, $black, $black);

    
    /*imagefilltoborder ($im, 100, $c4, $black, $black);
    imagefilltoborder ($im, 200, $c8, $black, $black);
    imagefilltoborder ($im, 300, $c12, $black, $black);
    //imagefilltoborder ($im, 400, $c8, $black, $black);

    imagefilltoborder ($im, 100, $c3, $black, $black);
    imagefilltoborder ($im, 200, $c7, $black, $black);
    imagefilltoborder ($im, 300, $c11, $black, $black);
    //imagefilltoborder ($im, 400, $c12, $black, $black);*/

    
    
    //imageline ($im,0,500,100,$c1,$text_color);
    imageline ($im,100,$c2,200,$c6,$green);
    imageline ($im,100,$c2+1,200,$c6+1,$green);
    imageline ($im,100,$c2-1,200,$c6-1,$green);
    
    imageline ($im,200,$c6,300,$c10,$green);
    imageline ($im,200,$c6+1,300,$c10+1,$green);
    imageline ($im,200,$c6-1,300,$c10-1,$green);    
    
    /*imageline ($im,300,$c3,400,$c4,$green);
    imageline ($im,300,$c3+1,400,$c4+1,$green);
    imageline ($im,300,$c3-1,400,$c4-1,$green);*/
    
    
    imageline ($im,100,$ca,200,$cb,$red);
    imageline ($im,100,$ca+1,200,$cb+1,$red);
    imageline ($im,100,$ca-1,200,$cb-1,$red);
    
    imageline ($im,200,$cb,300,$cc,$red);
    imageline ($im,200,$cb+1,300,$cc+1,$red);
    imageline ($im,200,$cb-1,300,$cc-1,$red);
    
    /*imageline ($im,300,$c7,400,$c8,$red);
    imageline ($im,300,$c7+1,400,$c8+1,$red);
    imageline ($im,300,$c7-1,400,$c8-1,$red);
    
    
    imageline ($im,100,$c3,200,$c7,$yellow);
    imageline ($im,100,$c3+1,200,$c7+1,$yellow);
    imageline ($im,100,$c3-1,200,$c7-1,$yellow);
    
    imageline ($im,200,$c7,300,$c11,$yellow);
    imageline ($im,200,$c7+1,300,$c11+1,$yellow);
    imageline ($im,200,$c7-1,300,$c11-1,$yellow);
    
    /*imageline ($im,300,$c11,400,$c12,$yellow);
    imageline ($im,300,$c11+1,400,$c12+1,$yellow);
    imageline ($im,300,$c11-1,400,$c12-1,$yellow);*/
    
    //point string
    imagestring($im, 5, 200, $ca-120, '(For different colours)', $blue);
    imagestring($im, 5, 200, $c6, '(For same colour)', $blue);
    /*
    imagestring($im, 5, 100, $c1-20, '(A, a)', $text_color);
    imagestring($im, 5, 200, $c6-20, '(F, f)', $text_color);
    imagestring($im, 5, 300, $c10-20, '(K, k)', $text_color);*/
    
    ImagePng ($im);
?>