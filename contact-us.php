<?php
$toEmail = "contactus@itupworks.com";
$msg="";
/* Handling Form Post */
if($_SERVER['REQUEST_METHOD'] == 'POST' &&  $_POST['name'] !="" &&  $_POST['email'] !="" && $_POST['mobile'] !="" && $_POST['message'] !="" && $_POST['subject'] !=""){
        $body ="<br/>Name : ". $_POST['name'];
        $body .="<br/>Email : ". $_POST['email'];
		$body .="<br/>Mobile : ". $_POST['mobile'];
		$body .="<br/>Subject : ". $_POST['subject'];
        $body .="<br/>Message : ". $_POST['message'];
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        if(@mail($toEmail,'contactus@itupworks.com',$body,$headers)){
                 $msg = "done";
        }else{
                $msg = "error";
        }
}
				if($msg == 'done'){
					echo json_encode('<h4 style="color:green;" >Thank you for contacting us! Will get back to you shortly.</h4>');
				}
				else if($msg == 'error'){
					echo json_encode('<h4 style="color:red;">Some problem while sending your queries. Please try again after some time!</h4>');
				}
		

?>
