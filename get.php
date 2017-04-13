<?php

    header("Content-type: application/json");

    $cars = array (
        array(
        'VW',
        'GOLF',
        '1.9 TDI',
        '2000',
        ),
        array(
        'AUDI',
        'A4',
        '3.2',
        '2005',
         ),
         array(
        'MG',
        'ZR',
        '1.4',
        '2004',
        )
    );

   echo json_encode($cars);

?>