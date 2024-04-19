<?php

declare(strict_types = 1);

namespace App\Services\ViaCep\Exceptions;

class AddressNotFoundException extends \Exception
{
    protected $message = 'Endereço não encontrado!';
}
