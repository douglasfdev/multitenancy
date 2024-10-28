<?php

use App\Livewire\Checkout;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Checkout::class)
        ->assertStatus(200);
});
