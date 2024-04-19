<?php

declare(strict_types = 1);

use App\Services\ViaCep\Entities\Address;
use App\Services\ViaCep\Exceptions\AddressNotFoundException;
use App\Services\ViaCep\Exceptions\InvalidCepException;
use App\Services\ViaCep\ViaCepService;

it('should get an address by a cep', function () {
    $address = (new ViaCepService())->getAddress('01001000');

    expect($address)->toBeInstanceOf(Address::class);
});

it('should throw an exception if cep is invalid', function () {
    (new ViaCepService())->getAddress('01001');
})->throws(InvalidCepException::class, 'CEP inválido!');

it('should throw an exception if address does no exists', function () {
    (new ViaCepService())->getAddress('00000000');
})->throws(AddressNotFoundException::class, 'Endereço não encontrado!');
