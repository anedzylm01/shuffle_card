<?php
    $swap_times = 9595;
    $cards = array();

    for ($i = 0; $i < 52; $i++) { 
        array_push($cards, $i);
    }
    //show_card($cards);
    for ($i = 0; $i < $swap_times; $i++) { 
        $time=(int)time();
        swap_card($cards, base_convert($time * $i, 10, 8) % 52, $time * $i % 52);
    }

    show_card($cards);

    function show_card($cards) {
        print_r($cards);
    }

    function swap_card(&$array, $key1, $key2) {
        $temp = $array[$key1];
        $array[$key1] = $array[$key2];
        $array[$key2] = $temp;
    }
?>