<?php

$name= $_REQUEST['name'];
$email= $_REQUEST['Email'];
$message= $_REQUEST['message'];

if(empty($name) || empty($email) || empty($message))
{
   echo "Please fill all the fields";

}
else{
    mail("deepanshu93067@gmail.com", "Webtech Message", $message,"Form: $ name <$email>");
    echo "<script type='text/javascript'>alert('message sent successfully');
    window.history.go(-1); 
    </script>";
}
?>