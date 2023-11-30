<?php

namespace App\Exceptions;


use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SurfistaNotFoundException extends NotFoundHttpException
{
    public function __construct()
    {
        parent::__construct('Surfista not found');
    }
}
