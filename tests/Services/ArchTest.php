<?php

declare(strict_types = 1);

arch('Entities should be readonly')
    ->expect('App\Services\ViaCep\Entities')
    ->toBeReadonly();

arch('Facades should extends laravel facade class')
    ->expect('App\Services\ViaCep\Facades')
    ->toExtend('Illuminate\Support\Facades\Facade');
