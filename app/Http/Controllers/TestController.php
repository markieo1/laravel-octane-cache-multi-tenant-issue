<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class TestController extends Controller
{
    public function index()
    {
        Cache::store('octane')->put('framework', 'Laravel', 30);
    }
}
