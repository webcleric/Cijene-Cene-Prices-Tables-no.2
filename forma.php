<?php
    // Metoda post
    $name = $_POST ('imeiprezime');
    $townandcity = $_POST ('gradidrzava');
    $email = $_POST ('email');
    $phone = $_POST ('telefon');
    // Izvuci podatke
    echo $name;
    echo $townandcity;
    echo $email;
    echo $phone;
    // Procesuj informacije i posalji ih
 ?>