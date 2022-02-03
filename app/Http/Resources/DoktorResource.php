<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoktorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Ime: ' => $this->resource->ime,
            'Prezime: ' => $this->resource->prezime,
            'Iskustvo: ' => $this->resource->iskustvo,
            'Porodilište: ' => new PorodilisteResource($this->resource->porodiliste)
        ];
    }
}
