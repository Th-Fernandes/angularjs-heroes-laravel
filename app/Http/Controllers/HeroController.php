<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validate = $request->validate([
                'photo' => 'required|string|max:255',
                'codename' => 'required|string|max:255',
                'phoneNumber' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'password' => 'required|string|max:255',
                'gender' => 'required'
            ]);
            $validate['name'] = json_encode($request->name);
            $validate['gender'] = $request->gender;
            $validate['id'] = \Illuminate\Support\Str::uuid()->toString();

            User::create($validate);

            return Response($validate, 200)
                ->header('Content-Type', 'text/plain');
        } catch (ValidationException $e) {
            return Response(['message' => $e->getMessage(), 'status' => $e->status], 422)
                ->header('Content-Type', 'text/plain');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $hero)
    {
        return Response($hero, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero $hero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        //
    }
}
