<?php

declare(strict_types=1);


namespace Gaia\Tekton\Form;


use Gaia\Tekton\Component\Form;
use Gaia\Tekton\Component\Value\ButtonPlacement;
use Gaia\Tekton\Component\Value\FieldType;

class SampleForm extends Form
{
    /**
     * SampleForm constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'GET',
            '/example',
            'example-form',
            'This is title',
            [
                'button' => [
                    'placement' => [
                        'vertical' => ButtonPlacement::BOTH,
                        'horizontal' => ButtonPlacement::RIGHT
                    ],
                    'action' => [
                        'submit' => [
                            'text' => 'Save'
                        ]
                    ]
                ],
                'style' => 'column col-6 col-mx-auto'
            ]
        );
    }

    /**
     * @return void
     */
    protected function build(): void
    {
        $this->addField('text', 'Text', FieldType::TEXT, [],
                [
                    'fields' => ['placeholder' => 'Text']
                ]
            )
            ->addField('email', 'Email', FieldType::EMAIL, [],
                [
                    'fields' => ['placeholder' => 'Email']
                ]
            )
            ->addField('password', 'Password', FieldType::PASSWORD, [],
                [
                    'fields' => ['placeholder' => 'Password']
                ]
            )
            ->addField('number', 'Number', FieldType::NUMBER, [],
                [
                    'fields' => ['placeholder' => 'Number']
                ]
            )
            ->addField('phone', 'Phone', FieldType::PHONE, [],
                [
                    'fields' => ['placeholder' => 'Phone']
                ]
            )
            ->addField('textarea', 'Textarea', FieldType::TEXTAREA, [],
                [
                    'fields' => ['placeholder' => 'Textarea']
                ]
            )
            ->addField('radio', 'Radio', FieldType::RADIO,
                [
                    ['text' => 'Choice 1', 'value' => '1', 'checked' => true],
                    ['text' => 'Choice 2', 'value' => '2', 'checked' => false],
                ]
            )
            ->addField('checkbox', 'Checkbox', FieldType::CHECKBOX,
                [
                    ['text' => 'Choice 1', 'value' => '1', 'checked' => true],
                    ['text' => 'Choice 2', 'value' => '2', 'checked' => false],
                    ['text' => 'Choice 3', 'value' => '3', 'checked' => false],
                    ['text' => 'Choice 4', 'value' => '4', 'checked' => true],
                ]
            )
            ->addField('switch', 'Switch', FieldType::SWITCH, [],
                [
                    'rows' => ['label' => false],
                    'fields' => ['placeholder' => 'Switch']
                ]
            );
    }
}