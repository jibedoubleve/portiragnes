<?php
   if (isset($_POST['action'])) {
       switch ($_POST['action']) {
            case 'sendMail':
                sendMail();
            break;
        }
    } 

    function sendMail() {
        echo ("Sending a mail...");
        $to = "jibedoubleve@gmail.com";
        $subject = "Location du bien LROL40";
        $mesasge = "Chère Madame,\nCher Monsieur,\nJe souhaites faire une réservation aux dates suivantes \nJe souhaiterais également avoir les 10% de réduction sur le prix total.\nCordialement. ";
        mail($to, $subject, $mesasge);
        exit;
    }
?>