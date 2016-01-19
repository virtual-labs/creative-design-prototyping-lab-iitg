<?php
    session_start();
	
    header ("Content-type: image/png");
    
    $timei1 = $_SESSION['timei1'];
    $timei2 = $_SESSION['timei2'];
    $timei3 = $_SESSION['timei3'];
    $timei4 = $_SESSION['timei4'];
    $timei5 = $_SESSION['timei5'];
    $timei6 = $_SESSION['timei6'];
    $timei7 = $_SESSION['timei7'];
    $timei8 = $_SESSION['timei8'];
    $timei9 = $_SESSION['timei9'];
    $timei10 = $_SESSION['timei10'];
    $timei11 = $_SESSION['timei11'];
    $timei12 = $_SESSION['timei12'];
    
    
    
    $c1 = (500-$timei1);
    $c2 = (500-$timei2);
    $c3 = (500-$timei3);
    $c4 = (500-$timei4);
    $c5 = (500-$timei5);
    $c6 = (500-$timei6);
    $c7 = (500-$timei7);
    $c8 = (500-$timei8);
    $c9 = (500-$timei9);
    $c10 = (500-$timei10);
    $c11 = (500-$timei11);
    $c12 = (500-$timei12);
    
    $cia = ($c1 + $c3 + $c4)/3;
    $cib = ($c5 + $c7 + $c8)/3;
    $cic = ($c9 + $c11 + $c12)/3;
    
    
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
    
    imageellipse ($im, 100, $cia, 15, 15, $black);
    imageellipse ($im, 200, $cib, 15, 15, $black);
    imageellipse ($im, 300, $cic, 15, 15, $black);
    
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

    imagefilltoborder ($im, 100, $cia, $black, $black);
    imagefilltoborder ($im, 200, $cib, $black, $black);
    imagefilltoborder ($im, 300, $cic, $black, $black);

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
    
    
    imageline ($im,100,$cia,200,$cib,$red);
    imageline ($im,100,$cia+1,200,$cib+1,$red);
    imageline ($im,100,$cia-1,200,$cib-1,$red);
    
    imageline ($im,200,$cib,300,$cic,$red);
    imageline ($im,200,$cib+1,300,$cic+1,$red);
    imageline ($im,200,$cib-1,300,$cic-1,$red);
    
    /*imageline ($im,300,$c3,400,$c4,$green);
    imageline ($im,300,$c3+1,400,$c4+1,$green);
    imageline ($im,300,$c3-1,400,$c4-1,$green);
    
    imageline ($im,100,$c4,200,$c8,$red);
    imageline ($im,100,$c4+1,200,$c8+1,$red);
    imageline ($im,100,$c4-1,200,$c8-1,$red);
    
    imageline ($im,200,$c8,300,$c12,$red);
    imageline ($im,200,$c8+1,300,$c12+1,$red);
    imageline ($im,200,$c8-1,300,$c12-1,$red);
    
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
    
    
    imagestring($im, 5, 200, $cia-120, '(For different images)', $blue);
    imagestring($im, 5, 200, $c6, '(For same image)', $blue);
    /*point string
    imagestring($im, 5, 100, $c2+20, '(A, A)', $text_color);
    imagestring($im, 5, 200, $c5+20, '(F, F)', $text_color);
    imagestring($im, 5, 300, $c9+20, '(K, K)', $text_color);
    
    imagestring($im, 5, 100, $c1-20, '(A, a)', $text_color);
    imagestring($im, 5, 200, $c6-20, '(F, f)', $text_color);
    imagestring($im, 5, 300, $c10-20, '(K, k)', $text_color);*/
    
    ImagePng ($im);
?>