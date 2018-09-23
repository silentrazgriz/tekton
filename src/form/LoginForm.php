<?php

declare(strict_types=1);


namespace Gaia\Tekton\Form;


use Gaia\Tekton\Component\Form;
use Gaia\Tekton\Component\Value\FieldType;

/**
 * Class LoginForm
 * @package App\Forms
 */
class LoginForm extends Form
{
    /**
     * LoginForm constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'GET',
            '/login',
            'login-form',
            'Please log in',
            [
                'button' => [
                    'action' => [
                        'submit' => [
                            'text' => 'Login'
                        ]
                    ]
                ],
                'style' => 'column col-6 col-mx-auto tekton-sample-login'
            ]
        );
    }

    /**
     * @return void
     */
    protected function build(array $values = []): void
    {
        $this->addField('email', 'Email', FieldType::EMAIL)
            ->setHint('Please input your email');

        $this->addField('password', 'Password', FieldType::PASSWORD);
    }
}