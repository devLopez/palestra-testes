<?php

declare(strict_types = 1);

namespace App\Services\ViaCep\Exceptions;

use Exception;

class InvalidCepException extends Exception
{
    protected $message = 'CEP inválido!';
}
