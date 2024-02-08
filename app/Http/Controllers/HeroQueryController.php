<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class HeroQueryController extends Controller
{
    public function __invoke(){}
    public function store(Request $request)
    {
        $emailInput = $request->query('email');
        $passwordInput = $request->query('password');

        $user = $this->findHeroByCredentials($emailInput, $passwordInput);

        return ($emailInput && $passwordInput && $user)
            ? Response(true, 200)
            : Response(['message' => 'USER NOT FOUND'], 404);
    }

    private function findHeroByCredentials(string $emailInput, string $passwordInput) 
    {
        return DB::table('heroes')
            ->where('email', '=', $emailInput)
            ->where('password', '=', $passwordInput)
            ->first();
    }
}
