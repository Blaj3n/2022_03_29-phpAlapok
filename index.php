<?php
    $a = array("red", "green", "blue");
    print_r($a);
    echo "<br>";
    var_dump($a);
    //sikertelen kiíratás echo $a;
    //lefoglalom a tömböt
    $tomb1 = array();
    //tömb adat meghatározása és módosítása
    $tomb1[0] = 3;
    //tömb bővítése
    $tomb1[] = "Máté";
    array_push($tomb1, "Balázs");
    //módosítom
    $tomb1[0] = "Ádám";
    print_r($tomb1);
?>