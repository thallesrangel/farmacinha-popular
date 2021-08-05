<?php

namespace App\Repositories;

use App\Models\Stripe;
use App\Repositories\Contracts\StripeRepositoryInterface;

class StripeRepositoryEloquent implements StripeRepositoryInterface
{
    protected $stripe;

    public function __construct(Stripe $stripe)
    {
        $this->stripe = $stripe;
    }

    public function get()
    {
        return $this->stripe->get();
    }
}

