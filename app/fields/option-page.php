<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option_page');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-szablonu');

$option_page
    ->addTab('Kontakt', ['placement' => 'left'])
        ->addText('name', ['label' => 'Nazwa firmy'])
        ->addTextarea('address', ['label' => 'Adres firmy', 'rows' => '2', 'new_lines' => 'br'])
        ->addText('phone', ['label' => 'Telefon firmowy'])
        ->addText('email', ['label' => 'Email firmowy'])
        ->addText('cprefix', ['label' => 'Prefix kontaktu', 'wrapper' => ['width' => 50]])
        ->addTextarea('ctitle', ['rows' => 2, 'new_lines' => 'br', 'label' => 'Tytuł kontaktu', 'wrapper' => ['width' => 50]])
        ->addTextarea('cdesc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis kontaktu'])
        ->addTextarea('check', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Polityka prywatności (formularz)'])
        ->addLink('cbutton', ['label' => 'Przyciski z kontaktem'])
    ->addTab('Header', ['placement' => 'left'])
        ->addImage('logo')
    ->addTab('Stopka', ['placement' => 'left'])
        ->addText('cbtitle', ['label' => 'Tytuł paska w stopce'])
        ->addText('copyright')
        ->addImage('iqlogo', ['label' => 'Wykonanie']);


return $option_page;