<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Dodaj komponent'])
            ->addLayout(get_field_partial('components.top'))
            ->addLayout(get_field_partial('components.stats'))
            ->addLayout(get_field_partial('components.services'))
            ->addLayout(get_field_partial('components.page_services'))
            ->addLayout(get_field_partial('components.video'))
            ->addLayout(get_field_partial('components.chart'))
            ->addLayout(get_field_partial('components.text'))
            ->addLayout(get_field_partial('components.slider'))
            ->addLayout(get_field_partial('components.prices'))
            ->addLayout(get_field_partial('components.blog'))
            ->addLayout(get_field_partial('components.answers'))
            ->addLayout(get_field_partial('components.boxes'))
            ->addLayout('content', ['label' => 'Treść']);

return $builder;