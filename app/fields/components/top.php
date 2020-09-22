<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$top = new FieldsBuilder('top', ['label' => 'Oferta']);

$top
    ->addText('title', ['label' => 'Tytuł', 'wrapper' => ['width' => 30]])
    ->addText('subtitle', ['label' => 'Podtytuł', 'wrapper' => ['width' => 30]])
    ->addText('sign', ['label' => 'Podpis', 'wrapper' => ['width' => 30]])
    ->addRepeater('boxes', ['label' => 'Boxy', 'min' => 4, 'max' => 4, 'layout' => 'block'])
        ->addText('title', ['label' => 'Tytuł'])
        ->addImage('image', ['label' => 'Obrazek'])
        ->addLink('link', ['label' => 'Link']);

return $top;