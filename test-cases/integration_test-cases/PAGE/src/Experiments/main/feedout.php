<h3 align="center">Thanks for your Feedback </h3>
<!-- VIP: change YourEmail to your real email -->

<?php

$ip = $_POST['ip'];
$httpagent = $_POST['httpagent'];
//$httpref = $_POST['$httpref'];
$nameis = $_POST['nameis'];
$nameis2 = $_POST['nameis2'];
$nameis3 = $_POST['nameis3'];
$nameis4 = $_POST['nameis4'];
$visitormail = $_POST['visitormail'];
$feedback = $_POST['feedback'];
$feedback1 = $_POST['feedback1'];
$feedback2 = $_POST['feedback2'];
$feedback3 = $_POST['feedback3'];
$rating22 = $_POST['rating22'];
$rating3 = $_POST['rating3'];
$rating4 = $_POST['rating4'];
$rating5 = $_POST['rating5'];
$rating6 = $_POST['rating6'];
$rating7 = $_POST['rating7'];
$rating8 = $_POST['rating8'];
$rating9 = $_POST['rating9'];
$rating10 = $_POST['rating10'];
$rating11 = $_POST['rating11'];
$rating12 = $_POST['rating12'];
$rating13 = $_POST['rating13'];
$rating14 = $_POST['rating14'];
$rating15 = $_POST['rating15'];
$rating16 = $_POST['rating16'];
$rating17 = $_POST['rating17'];
$rating18 = $_POST['rating18'];
$rating19 = $_POST['rating19'];
$rating20 = $_POST['rating20'];
$rating21 = $_POST['rating21'];

//$emailvalidation = $_POST['emailvalidation'];
//$fieldvalidation = $_POST['fieldvalidation'];
//$htmlcontrol= $_POST['htmlcontrol'];
//$phpform = $_POST['phpform'];
//$htmlform = $_POST['htmlform'];
//$attn = $_POST['attn'];

if (eregi('http:', $feedback)) { die ("Do NOT try that! ! "); }

if((!$visitormail == "") && (!strstr($visitormail,"@") || !strstr($visitormail,".")))
{
echo "<h2>Use Back - Enter valid e-mail</h2>\n";
$tellem = "<h2>Feedback was NOT submitted</h2>\n";
}

if(empty($nameis) || empty($feedback) || empty($visitormail)) {
echo "<h2>Use Back - fill in all fields</h2>\n";
}

//echo $tellem;




$todayis = date("l, F j, Y, g:i a") ;
//,strtotime("+6.30 hour")
//$attn = $attn;
$subject = "Feedback";

$feedback = stripcslashes($feedback);

$message = " $todayis \n
Name of Institution : $nameis \n
From: $nameis ($visitormail)\n
Type of virtual lab:$rating22 \n
1. Which experiment number you perform? :$nameis3 \n
a) How do you rate the online performance of the experiment? :$rating3 \n
b) To what extent did you have control over the interactions? :$rating4 \n
c) To what degree was the actual lab environment simulated? :$rating5 \n
d) The measurement and analysis of data was found to be easy? :$rating6 \n
e) The manuals were found to be helpful? :$rating7 \n
f) The links provided were consistent with the objectives of the experiment? :$rating8 \n
g) The results of experiment were easily interpretable? :$rating9 \n
h) A clear understanding of the experiment and related topics was gained? :$rating10 \n
3. How helpful do you feel the system is? :$nameis4 \n
4. Did you experience any problem?: $feedback \n
5. Is there anything you would like to tell us?: $feedback1 \n
6. Did you feel confident enough while performing the experimen?:$rating11 \n
7. Was the experiment/process motivating enough?:$rating12 \n
8. Did you go through tghe manual/step by step method before performing the experiments?:$rating13 \n 
***************************************************
*       Please answer the following questions     *
***************************************************
1.Did you get the feel actual lab while performing the experiments?:$rating14 \n 
2. Did you feel the absence of an instructor?:$rating15 \n 
3. Could you run the experiments smoothly, i.e., without any interruptions? :$rating16 \n 
4. Could you measure and analyze the data successfully?:$rating17 \n 
5. Did you follow the step by step method before running the live experiment?:$rating18 \n 
6. Could you compare your results with the given typical results?:$rating19 \n 
7. Could you measure and analyze the data successfully?:$rating20 \n 
8.Specify three problems/difficulties you faced while performing the experiments?: $feedback2 \n
9. Give three interesting things about the experiments: $feedback3 \n
10. Do you think doing experiments through virtual lab gives scope for more innovative and creative research work?:$rating21 \n 		  
Additional Info : IP = $ip \n
Browser = $httpagent \n

";

$from = "From: $visitormail\r\n";

mail("vrcdsl.iitg@gmail.com", $subject, $message, $from);


$screenout = str_replace("\n", "<br/>", $message);
?>


<p align="center">

<?php echo $screenout ?>

</p>
