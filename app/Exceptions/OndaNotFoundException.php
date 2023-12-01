<?php

namespace App\Exceptions;


use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class OndaNotFoundException extends NotFoundHttpException
{
    public function __construct()
    {
        parent::__construct('Ondas not found');
    }
}
