<?php

use Gaia\Tekton\Component\Value\ButtonPlacement;

return [
    'scripts' => [
        // Text
        'text'                  => false,
        'email'                 => false,
        'password'              => false,
        'number'                => false,
        'phone'                 => true,
        'textarea'              => false,
        // Date
        'date'                  => true,
        'date-range'            => true,
        // Files
        'file-upload'           => true,
        'file-upload-multiple'  => true,
        'image-upload'          => true,
        'image-upload-multiple' => true,
        // Dropdown & Choice
        'select'                => true,
        'radio'                 => false,
        'checkbox'              => false,
        // Hidden
        'hidden'                => false
    ],
    'load-styles' => [
        'css/app.css',
        'vendor/fontawesome/css/all.css',
        'vendor/flatpickr/flatpickr.min.css',
        'vendor/tekton/css/tekton.base.css'
    ],
    'load-scripts' => [
        'vendor/sizzle/sizzle.min.js',
        'vendor/flatpickr/flatpickr.min.js',
        'vendor/tekton/js/tekton.base.js'
    ],
    'forms' => [
        'button' => [
            'enabled' => true,
            'placement' => [
                'vertical' => ButtonPlacement::BOTTOM,
                'horizontal' => ButtonPlacement::RIGHT
            ],
            'action' => [
                'submit' => [
                    'enabled' => true,
                    'text' => 'Save'
                ],
                'reset' => [
                    'enabled' => false,
                    'text' => 'Reset'
                ]
            ]
        ],
        'labelAlign'    => 'text-center',
        'style'         => 'col',
    ],
    'fields' => [
        'style'          => 'col',
        'value'          => null,
        'placeholder'    => '',
        'helper'         => null,
        'inline'         => false,
        'required'       => true,
    ],
    'rows' => [
        'style'     => [
            'label' => 'col-2',
            'input' => 'col-10'
        ],
        'label'     => true,
    ]
];