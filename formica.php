<?php
    $mail_to = 'alokinsavic@gmail.com'; // Specifiše email

    // Izvule podatke iz HTML
    $imeiprezime = $_POST['imeiprezime'];
    $gradidrzava = $_POST['gradidrzava'];
    $email = $_POST['email'];
    $kolikodugo = $_POST['kolikodugo'];
    $ocekivanja = $_POST['ocekivanja'];
    $telefon = $_POST['telefon'];
    $web = $_POST['web'];
    $oprema = $_POST['oprema'];
    $izaberi = $_POST['izaberi'];
    
    /*
    echo $imeiprezime;
    echo $gradidrzava;
    echo $email;
    echo $kolikodugo;
    echo $ocekivanja;
    echo $telefon;
    echo $web;
    echo $oprema;
    echo $izaberi;
    */

    // Konstruiše naslov pošte
    $subject = 'www.mysite.com Message from visitor ' . $imeiprezime;

    // Konstruiše sadržaj
    $body_message = 'Ime i prezime: ' . $imeiprezime . "\r\n";
    $body_message = 'Grad i država: ' . $gradidrzava . "\r\n";
    $body_message = 'E-mail: ' . $email . "\r\n";
    $body_message = 'Koliko dugo se aktivno bavite fotografijom:: ' . $kolikodugo . "\r\n";
    $body_message = 'Očekivanja: ' . $ocekivanja . "\r\n";
    $body_message = 'Kontakt Telefon: ' . $telefon . "\r\n";
    $body_message = 'Web Lokacija: ' . $web . "\r\n";
    $body_message = 'Koju opremu (fotoaparat) koristite za rad:: ' . $oprema . "\r\n";
    $body_message = 'Sa ili bez smeštaja:: ' . $izaberi . "\r\n";
    

    // Konstruiše Zaglavlje
    $headers = 'From: ' . $mail_from . "\r\n";
    $headers .= 'Reply-To: ' . $mail_from . "\r\n";

    $mail_sent = mail($mail_to, $subject, $body_message, $headers);

    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Hvala na prijavi. Kontaktirat ćemo vas uskoro.');
        window.location = 'http://www.luxworkshops.co';
        </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please, notify the site administrator admin@admin.com');
        window.location = 'http://www.luxworkshops.co';
    </script>
    <?php
    }
?>