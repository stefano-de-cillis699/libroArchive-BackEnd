<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Http\Controllers\Controller;
use App\Http\Resources\CharacterResource;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;

class CharacterController extends Controller
{
    public function index()
    {
        return CharacterResource::collection(Character::all())->collection;
    }

    public function store(StoreCharacterRequest $request)
    {
        $character = Character::create($request->validated());
        return CharacterResource::make($character);
    }

    public function show(Character $character)
    {
        return CharacterResource::make($character);
    }

    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $character->update($request->validated());
        return CharacterResource::make($character);
    }

    public function destroy(Character $character)
    {
        $character->delete();
        return response()->noContent();
    }
}
