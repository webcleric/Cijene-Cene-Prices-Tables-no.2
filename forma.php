<?php
    // izvuce informacije
    $imeiprezime = $_POST ['imeiprezime'];
    $gradidrzava = $_POST ['gradidrzava'];
    $email = $_POST ['email'];
    $kolikodugo = $_POST ['kolikodugo'];
    $ocekivanja = $_POST ['ocekivanja'];
    $telefon = $_POST ['telefon'];
    $web = $_POST ['web'];
    $oprema = $_POST ['oprema'];
    $izaberi = $_POST ['izaberi'];
    // test
    echo $imeiprezime;
    echo $gradidrzava;
    echo $email;
    echo $kolikodugo;
    echo $ocekivanja;
    echo $telefon;
    echo $web;
    echo $oprema;
    echo $izaberi;
    // Procesuj izvucene informacije i posalje ih
    $email_poruka = "
    
    Sa ili bez smeštaja: ".$izaberi."
    Ime i Prezime: ".$imeiprezime."
    Grad i Drzava: ".$gradidrzava."
    E-mail: ".$email."
    Telefon: ".$telefon."
    Web: ".$web."
    Koliko dugo se bavite fotografijom: ".$kolikodugo."
    Šta očekujete od ove radionice: ".$ocekivanja."
    Koju opremu (fotoaparat) koristite za rad: ".$oprema."
    
    ";
    mail { "nesto@nesto.com" , "Kontakt forma sa Cena" , $izaberi_imeiprezime_gradidrzava_email_telefon_web_kolikodugo_ocekivanja_oprema };
    header {"Location: cestitamo.php"};
 ?>