<?php

declare(strict_types = 1);

use App\Services\ViaCep\Entities\Address;
use Illuminate\Support\Facades\File;

it('should create an instance of Address with data from api', function () {
    $data = File::json('tests/fixtures/address.json');

    $address = Address::createFromApi($data);

    expect($address)->toBeInstanceOf(Address::class);
});
