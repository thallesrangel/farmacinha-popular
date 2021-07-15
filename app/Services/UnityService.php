<?php

namespace App\Services;

use App\Repositories\UnityRepository;

class UnityService
{
    protected $unityRepository;

    public function __construct(UnityRepository $unityRepository)
    {
        $this->unityRepository = $unityRepository;
    }

    public function get()
    {
        return $this->unityRepository->get();
    }
}
