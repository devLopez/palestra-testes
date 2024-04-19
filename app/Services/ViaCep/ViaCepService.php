<?php

declare(strict_types = 1);

namespace App\Services\ViaCep;

use App\Services\ViaCep\Entities\Address;
use App\Services\ViaCep\Exceptions\AddressNotFoundException;
use App\Services\ViaCep\Exceptions\InvalidCepException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class ViaCepService
{
    protected PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::baseUrl('https://viacep.com.br/ws/');
    }

    public function getAddress(string $string)
    {
        $response = $this->api->get($string . '/json');

        if ($response->failed()) {
            throw new InvalidCepException();
        }

        if ($response->json('erro')) {
            throw new AddressNotFoundException();
        }

        return Address::createFromApi($response->json());
    }
}
