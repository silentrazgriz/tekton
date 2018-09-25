<?php

declare(strict_types=1);


namespace Gaia\Tekton\Controller;


use Gaia\Tekton\Form\LoginForm;
use Gaia\Tekton\Form\SampleForm;

/**
 * Class SampleController
 * @package App\Http\Controllers
 */
class SampleController
{
    /**
     * @return string
     * @throws \Throwable
     */
    public function sample()
    {
        $form = new SampleForm();
        return $form->render();
    }

    /**
     * @return string
     * @throws \Throwable
     */
    public function login()
    {
        $form = new LoginForm();
        return $form->render();
    }
}