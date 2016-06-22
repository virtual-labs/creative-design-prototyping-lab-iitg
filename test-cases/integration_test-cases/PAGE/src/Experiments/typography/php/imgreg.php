<?php
    session_start();
	
    header ("Content-type: image/png");
    
    $time1 = $_SESSION['timecst1'];
    $time2 = $_SESSION['timecst2'];
    $time3 = $_SESSION['timecst3'];
    $time4 = $_SESSION['timec1'];
    $time5 = $_SESSION['timec7'];
    $time6 = $_SESSION['timec16'];
    
    
    
    $c1 = (800-$time1);
    $c2 = (800-$time2);
    $c3 = (800-$time3);
    $c4 = (800-$time4);
    $c5 = (800-$time5);
    $c6 = (800-$time6);
    
    
    /*$cia = ($c1 + $c3 + $c4)/3;
    $cib = ($c5 + $c7 + $c8)/3;
    $cic = ($c9 + $c11 + $c12)/3;*/
    
    
    $im = @ImageCreate (800, 801)
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
    imageline ($im,0,0,0,800,$black);
    imageline ($im,0,800,800,800,$black);
    
    //main graph
    //circles to indicate the points on the graphs
    imageellipse ($im, 50, $c1, 15, 15, $black);
    imageellipse ($im, 100, $c2, 15, 15, $black);
    imageellipse ($im, 150, $c3, 15, 15, $black);
    imageellipse ($im, 200, $c4, 15, 15, $black);
    imageellipse ($im, 250, $c5, 15, 15, $black);
    imageellipse ($im, 300, $c6, 15, 15, $black);
    //imageellipse ($im, 400, $c4, 15, 15, $black);
    
    /*imageellipse ($im, 100, $cia, 15, 15, $black);
    imageellipse ($im, 200, $cib, 15, 15, $black);
    imageellipse ($im, 300, $cic, 15, 15, $black);*/
    
    /*imageellipse ($im, 100, $c4, 15, 15, $black);
    imageellipse ($im, 200, $c8, 15, 15, $black);
    imageellipse ($im, 300, $c12, 15, 15, $black);
    //imageellipse ($im, 400, $c8, 15, 15, $black);
    
    imageellipse ($im, 100, $c3, 15, 15, $black);
    imageellipse ($im, 200, $c7, 15, 15, $black);
    imageellipse ($im, 300, $c11, 15, 15, $black);
    //imageellipse ($im, 400, $c12, 15, 15, $black);*/
    
    
    //fill color
    imagefilltoborder ($im, 50, $c1, $black, $black);
    imagefilltoborder ($im, 100, $c2, $black, $black);
    imagefilltoborder ($im, 150, $c3, $black, $black);
    imagefilltoborder ($im, 200, $c4, $black, $black);
    imagefilltoborder ($im, 250, $c5, $black, $black);
    imagefilltoborder ($im, 300, $c6, $black, $black);
    //imagefilltoborder ($im, 400, $c4, $black, $black);

    //imagefilltoborder ($im, 100, $cia, $black, $black);
    //imagefilltoborder ($im, 200, $cib, $black, $black);
    //imagefilltoborder ($im, 300, $cic, $black, $black);

    /*imagefilltoborder ($im, 100, $c4, $black, $black);
    imagefilltoborder ($im, 200, $c8, $black, $black);
    imagefilltoborder ($im, 300, $c12, $black, $black);
    //imagefilltoborder ($im, 400, $c8, $black, $black);

    imagefilltoborder ($im, 100, $c3, $black, $black);
    imagefilltoborder ($im, 200, $c7, $black, $black);
    imagefilltoborder ($im, 300, $c11, $black, $black);
    //imagefilltoborder ($im, 400, $c12, $black, $black);*/

    
    
    //imageline ($im,0,500,100,$c1,$text_color);
    imageline ($im,50,$c1,100,$c2,$green);
    imageline ($im,50,$c1+1,100,$c2+1,$green);
    imageline ($im,50,$c1-1,100,$c2-1,$green);
    
    imageline ($im,100,$c3,150,$c4,$green);
    imageline ($im,100,$c3+1,150,$c4+1,$green);
    imageline ($im,100,$c3-1,150,$c4-1,$green);
    imageline ($im,200,$c5,250,$c6,$green);
    imageline ($im,200,$c5+1,250,$c6+1,$green);
    imageline ($im,200,$c5-1,250,$c6-1,$green);
    
    
    //imageline ($im,100,$cia,200,$cib,$red);
    //imageline ($im,100,$cia+1,200,$cib+1,$red);
    //imageline ($im,100,$cia-1,200,$cib-1,$red);
    
    //imageline ($im,200,$cib,300,$cic,$red);
    //imageline ($im,200,$cib+1,300,$cic+1,$red);
    //imageline ($im,200,$cib-1,300,$cic-1,$red);
    
    
    
    //imageline ($im,100,$c4,200,$c8,$red);
    //imageline ($im,100,$c4+1,200,$c8+1,$red);
    //imageline ($im,100,$c4-1,200,$c8-1,$red);
    
    //imageline ($im,200,$c8,300,$c12,$red);
    //imageline ($im,200,$c8+1,300,$c12+1,$red);
    //imageline ($im,200,$c8-1,300,$c12-1,$red);
    
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
    
    
    //imagestring($im, 5, 200, $cia-120, '(For different images)', $blue);
    //imagestring($im, 5, 200, $c6, '(For same image)', $blue);
    /*point string
    imagestring($im, 5, 50, $c1+20, '(A, A)', $text_color);
    imagestring($im, 5, 100, $c2+20, '(F, F)', $text_color);
    imagestring($im, 5, 150, $c3+20, '(K, K)', $text_color);
    
    imagestring($im, 5, 200, $c4-20, '(A, a)', $text_color);
    imagestring($im, 5, 250, $c5-20, '(F, f)', $text_color);
    imagestring($im, 5, 300, $c6-20, '(K, k)', $text_color);*/
    
    ImagePng ($im);
?>