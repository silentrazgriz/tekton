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
        'file-upload'           => [
            'vendor/tekton/js/file-preview.js'
        ],
        'file-upload-multiple'  => [],
        'image-upload'          => [
            'vendor/tekton/js/image-preview.js'
        ],
        'image-upload-multiple' => [],
        // Dropdown & Choice
        'select'                => [
            'vendor/tekton/js/select.js'
        ],
        'radio'                 => [],
        'checkbox'              => [],
        // Hidden
        'hidden'                => []
    ],
    'load-styles' => [
        'vendor/flatpickr/flatpickr.min.css',
        'vendor/tekton/css/tekton.base.css'
    ],
    'load-scripts' => [
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
        'style'         => 'col',
        'value'         => null,
        'placeholder'   => '',
        'helper'        => null,
        'inline'        => false,
        'required'      => true,
        'readonly'      => false,
        'disabled'      => false,
        'hidden'        => false,
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
    ],
    'default-view' => 'tekton::sample'
];