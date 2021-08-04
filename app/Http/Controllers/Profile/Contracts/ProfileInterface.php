<?php

namespace App\Http\Controllers\Profile\Contracts;

use Illuminate\Http\Request;

interface ProfileInterface
{
    public function profile(Request $request);
}
