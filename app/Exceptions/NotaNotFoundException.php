<?php

namespace App\Exceptions;


use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class NotaNotFoundException extends NotFoundHttpException
{
    public function __construct()
    {
        parent::__construct('Notas not found');
    }
}
