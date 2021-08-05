<?php

namespace App\Services;

use App\Repositories\Contracts\StripeRepositoryInterface;

class StripeService
{
    protected $stripeRepository;

    public function __construct(StripeRepositoryInterface $stripeRepository)
    {
        $this->stripeRepository = $stripeRepository;
    }

    public function get()
    {
        return $this->stripeRepository->get();
    }
}