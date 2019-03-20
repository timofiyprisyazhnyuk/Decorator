<?php

namespace Decorator;

interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}
