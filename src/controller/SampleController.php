<?php

declare(strict_types=1);


namespace Gaia\Tekton\Controller;


use App\Forms\LoginForm;
use App\Forms\SampleForm;

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
        return $form->render('tekton::sample');
    }

    /**
     * @return string
     * @throws \Throwable
     */
    public function login()
    {
        $form = new LoginForm();
        return $form->render('tekton::sample');
    }
}