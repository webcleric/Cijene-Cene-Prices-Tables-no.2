<?php
    // Izvuče podatke iz HTML
    $imeiprezime = $_POST['imeiprezime'];
    $gradidrzava = $_POST['gradidrzava'];
    $email = $_POST['email'];
    $kolikodugo = $_POST['kolikodugo'];
    $ocekivanja = $_POST['ocekivanja'];
    $telefon = $_POST['telefon'];
    $web = $_POST['web'];
    $oprema = $_POST['oprema'];
    $izaberi = $_POST['izaberi'];


    // Konstruiše naslov pošte i pošalje
    
    $mail_to = 'email@some.com'; // Specifiše email
    $subject = 'Poslano sa kontakt forme na # od: ' . $imeiprezime;
    
    // Ispise informacije (Test Environment)

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

    // Konstruiše sadržaj
    $body_message = 'Ime i prezime: '.$imeiprezime."\n";
    $body_message = 'Grad i Država: '.$gradidrzava."\n";
    $body_message .= 'E-mail: '.$email."\n";
    $body_message .= 'Koliko dugo se aktivno bavite fotografijom: '.$kolikodugo."\n";
    $body_message .= 'Očekivanja: '.$ocekivanja."\n";
    $body_message .= 'Kontakt Telefon: '.$telefon."\n";
    $body_message .= 'Web Lokacija: '.$web."\n";
    $body_message .= 'Koju opremu (fotoaparat) koristite za rad: '.$oprema."\n";
    $body_message .= 'Sa ili bez smeštaja:: ' . $izaberi;

    /*
    $imeiprezime = 'Ime i prezime: ' . $imeiprezime . "\r\n";
    $gradidrzava = 'Grad i država: ' . $gradidrzava . "\r\n";
    $email = 'E-mail: ' . $email . "\r\n";
    $kolikodugo = 'Koliko dugo se aktivno bavite fotografijom:: ' . $kolikodugo . "\r\n";
    $ocekivanja = 'Očekivanja: ' . $ocekivanja . "\r\n";
    $telefon = 'Kontakt Telefon: ' . $telefon . "\r\n";
    $web = 'Web Lokacija: ' . $web . "\r\n";
    $oprema = 'Koju opremu (fotoaparat) koristite za rad:: ' . $oprema . "\r\n";
    $izaberi = 'Sa ili bez smeštaja:: ' . $izaberi . "\r\n";
    */
    

    // Konstruiše Zaglavlje
    $headers .= 'Od: ' . $imeiprezime . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8;' . "\r\n" .
    $headers .= 'Odgovori: ' . $email . "\r\n";

    $mail_status = mail($mail_to, $subject, $body_message, $headers);


        if ($mail_status) { ?>
      <script language="javascript" type="text/javascript">
            alert('Hvala na prijavi. Kontaktirat ćemo vas uskoro.');
            document.location = '#'
        </script>
    <?php
    }
    else { ?>
        <script language="javascript" type="text/javascript">
            alert('Poruka Nije poslata. Molimo vas da se javite na  leon@leonbijelic.com ili nas nazvati na : +00 11 222 3333 444444 (Someone)');
            document.location = '#'
        </script>
    <?php
    }
    ?>
