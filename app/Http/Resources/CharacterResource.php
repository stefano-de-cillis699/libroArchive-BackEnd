<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CharacterResource extends JsonResource
{
    public static $wrap = null;
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'surname' => $this->surname,
            'age' => $this->age,
            'codename' => $this->codename,
            'hairColor' => $this->hairColor,
            'eyeColor' => $this->eyeColor,
            'description' => $this->description,
            'job' => $this->job,
            'origin' => $this->origin,
            'image' => $this->image,
            'projectId' => $this->projectId
        ];
    }
}
