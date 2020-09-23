<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$main = new FieldsBuilder('main');

$main
    ->setLocation('post_type', '==', 'page');

$main
    ->addTab('main', ['label'=>'Ustawienia stopki','placement' => 'left'])
        ->addTrueFalse('show_form', ['label'=>'Wyświetl formularz', 'default_value' => 0]);
        //->addTrueFalse('show_map', ['label'=>'Wyświetl mapke', 'default_value' => 0]);

return $main;