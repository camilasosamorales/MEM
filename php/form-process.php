<?php
 
$errorMSG = "";
 
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Campo obligatorio";
} else {
    $name = $_POST["name"];
}
 
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Campo obligatorio";
} else {
    $email = $_POST["email"];
}
 
// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Campo obligatorio";
} else {
    $msg_subject = $_POST["msg_subject"];
}
 
 
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Campo obligatorio";
} else {
    $message = $_POST["message"];
}
 
//Add your email here
$EmailTo = "memarqtabariloche@gmail.com";
$Subject = "Nuevo mensaje - MEM";
 
// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Asunto: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
 
?>