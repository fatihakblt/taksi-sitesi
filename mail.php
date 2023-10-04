<?php
    $to = 'demo@site.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subject= $_POST["subject"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Gönderenin E-postası
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'  '.$subject.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Telefon: '.$subject.'</td></tr>
        <tr><td>Mesaj: '.$text.'</td></tr>
    </table>';

    if (@mail($to, $subject, $message, $headers))
    {
        echo 'Mesajınız gönderildi.';
    }else{
        echo 'Başarısız oldu.';
    }
?>

