<?php

use Gaia\Tekton\Component\Value\ButtonPlacement;

return [
    'scripts' => [
        // Text
        'text'                  => [],
        'email'                 => [],
        'password'              => [],
        'number'                => [],
        'phone'                 => [
            'vendor/cleave/cleave.min.js',
            'vendor/cleave/cleave-phone.id.js',
            'vendor/tekton/js/phone.js'
        ],
        'money'                 => [
            'vendor/cleave/cleave.min.js',
            'vendor/tekton/js/money.js'
        ],
        'textarea'              => [],
        // Date
        'date'                  => [
            'vendor/tekton/js/date.js'
        ],
        'date-range'            => [
            'vendor/tekton/js/date-range.js'
        ],
        // Files
        'file-upload'           => [],
        'file-upload-multiple'  => [],
        'image-upload'          => [],
        'image-upload-multiple' => [],
        // Dropdown & Choice
        'select'                => [],
        'radio'                 => [],
        'checkbox'              => [],
        // Hidden
        'hidden'                => []
    ],
    'load-styles' => [
        'css/app.css',
        'vendor/flatpickr/flatpickr.min.css',
        'vendor/tekton/css/tekton.base.css'
    ],
    'load-scripts' => [
        'js/app.js',
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
        'validation'    => [
            'valid' => '',
            'invalid' => ''
        ],
    ],
    'rows' => [
        'style'     => [
            'label' => 'col-2',
            'input' => 'col-10'
        ],
        'label'     => true,
    ]
];