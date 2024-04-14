<?php

declare(strict_types = 1);

use App\Models\User;

use Illuminate\Support\Facades\Notification;

use function Pest\Laravel\actingAs;

test('user should be redirected to dashboard if email is already verified', function () {
    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);

    actingAs($user)
        ->post(route('verification.send'))
        ->assertRedirect(route('dashboard', absolute: false));
});

test('it should send a notification to user and redirect it back with the verification status', function () {
    Notification::fake();

    $user = User::factory()->create([
        'email_verified_at' => null,
    ]);

    actingAs($user)
        ->post(route('verification.send'))
        ->assertRedirect()
        ->assertSessionHas('status', 'verification-link-sent');

    Notification::assertSentTo($user, Illuminate\Auth\Notifications\VerifyEmail::class);
});
