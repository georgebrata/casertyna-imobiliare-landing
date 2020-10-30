<?php
    $to = 'csnimobiliare@gmail.com';
    $firstname = $_POST["fname"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $phone= $_POST["phone"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "De la: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<h1>de la: '.$firstname.'  '.$laststname.'</h1>
        <small>'.$email.'</small>
        <small>'.$phone.'</small>
        <hr>
        <p>'.$text.'</p>
        <br>
        
        <p>Mesaj primit prin formularul de contact de pe http://casertyna-imobiliare.ro/contact la adresa csnimobiliare@gmail.com.</p>
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'Mesajul a fost trimis.';
    }else{
        echo 'Eroare!';
    }

?>
