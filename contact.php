<?php

$textName = $_POST["name"];
$textEmail = $_POST["mail"];
$textMessage = $_POST["comment"];
$to = 'bhagatpavbhaji@gmail.com';

$message = 'Full Name : ' . $textName . '<br>';
$message .= 'Email: ' . $textEmail . '<br>';
$message .= 'Message : ' . $textMessage . '<br/>';
$headers  =  'From: ' . $textEmail . "\r\n";
$headers .= 'Reply-To: ' . $textEmail . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$result = @mail($to, $textName." send contact", $message, $headers);

if ($result) {
    $data['info']="success";
    $data['msg']="Your message send successfull";
    echo json_encode($data);
}else{
    $data['info']="error";
    $data['msg']="Your message send fail";
    echo json_encode($data);
}
?>