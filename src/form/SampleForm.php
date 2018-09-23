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
                ]
            ]
        );
    }

    /**
     * @return void
     */
    protected function build(array $values = []): void
    {
        $this->addField('text', 'Text', FieldType::TEXT)
            ->setPlaceholder('Text')
            ->setInvalidMessage('Please fill this field');

        $this->addField('email', 'Email', FieldType::EMAIL)
            ->setPlaceholder('Email');

        $this->addField('password', 'Password', FieldType::PASSWORD)
            ->setPlaceholder('Password');

        $this->addField('number', 'Number', FieldType::NUMBER)
            ->setPlaceholder('Number');

        $this->addField('phone', 'Phone', FieldType::PHONE)
            ->setPlaceholder('Phone');

        $this->addField('money', 'Money', FieldType::MONEY)
            ->setPlaceholder('Money');

        $this->addField('textarea', 'Textarea', FieldType::TEXTAREA)
            ->setPlaceholder('Textarea');

        $this->addField('radio', 'Radio', FieldType::RADIO)
            ->setPlaceholder('Money')
            ->setChoiceValues(
                [
                    ['text' => 'Choice 1', 'value' => '1', 'checked' => true],
                    ['text' => 'Choice 2', 'value' => '2', 'checked' => false],
                ]
            );

        $this->addField('checkbox', 'Checkbox', FieldType::CHECKBOX)
            ->setOptions(['inline' => true])
            ->setChoiceValues(
                [
                    ['text' => 'Choice 1', 'value' => '1', 'checked' => true],
                    ['text' => 'Choice 2', 'value' => '2', 'checked' => false],
                    ['text' => 'Choice 3', 'value' => '3', 'checked' => false],
                    ['text' => 'Choice 4', 'value' => '4', 'checked' => true],
                ]
            );

        $this->addField('date', 'Date', FieldType::DATE)
            ->setPlaceholder('Date');

        $this->addField('date_range', 'Date Range', FieldType::DATE_RANGE)
            ->setPlaceholder('Date Range');
    }
}