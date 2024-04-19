<?php

declare(strict_types = 1);

namespace App\Services\ViaCep\Entities;

readonly class Address
{
    public function __construct(
        public string $cep,
        public string $logradouro,
        public string $complemento,
        public string $bairro,
        public string $localidade,
        public string $uf,
        public string $ibge,
        public string $gia,
        public string $ddd,
        public string $siafi
    ) {}

    public static function createFromApi(array $data): self
    {
        return new self(
            cep: $data['cep'],
            logradouro: $data['logradouro'],
            complemento: $data['complemento'],
            bairro: $data['bairro'],
            localidade: $data['localidade'],
            uf: $data['uf'],
            ibge: $data['ibge'],
            gia: $data['gia'],
            ddd: $data['ddd'],
            siafi: $data['siafi']
        );
    }
}
