<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Word extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'word' => $this->word,
        ];
    }
}
